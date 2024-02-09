@extends('template.admin-template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
@endsection

@section('body')
    <div class="flex">
        <x-admin-navigation-bar page="manage-news" />

        <div
            class="flex flex-col justify-center items-start gap-8 pl-20 w-full c-container py-4 sm:py-6 md:py-8 lg:py-10 xl:py-12 2xl:py-14 ml-[72px] lg:ml-[18rem] mt-16">

            <a href="{{ route('viewsNews') }}" class="gold-btn flex justify-center items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>

                Kembali</a>

            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl font-outfit font-medium">Tambah Artikel</h1>

            <form id="articleForm" class="w-full  p-8  flex flex-col justify-center items-start gap-6" action="{{ route('storeNews') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-full">
                    <x-input-label for="title" :value="__('Judul Artikel')" class="font-cormorant font-bold text-black"/>
                    <x-text-input type="text" id="title" class="mt-1 w-full font-cormorant font-bold" placeholder="Masukkan judul artikel" name="title"
                        value="{{ old('title') }}" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="image" :value="__('Gambar')" class="font-cormorant font-bold text-black"  />
                    <x-text-input type="file" id="image" class="mt-1 w-full font-cormorant font-bold border-black"
                        name="image" value="{{ old('image') }}" />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="description" :value="__('Isi Artikel')" class="font-cormorant font-bold text-black" />
                    <x-text-area type="text" id="description" class="mt-1 w-full font-cormorant font-bold" placeholder="Masukkan isi artikel"
                        name="description" value="{{ old('description') }}" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="author" :value="__('Penulis Artikel')" class="font-cormorant font-bold text-black"/>
                    <x-text-input type="text" id="author" class="mt-1 w-full font-cormorant font-bold" placeholder="Masukkan penulis artikel"
                        name="author" value="{{ old('author') }}" />
                    <x-input-error :messages="$errors->get('author')" class="mt-2" />
                </div>

                <div class="w-full">
                    <x-input-label for="date" :value="__('Tanggal Penulisan')" class="font-cormorant font-bold text-black" />
                    <x-text-input type="date" id="date" class="mt-1 w-full font-cormorant font-bold"
                        name="date" value="{{ old('date') }}" />
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>

                <button type="submit" id="submitForm" class="bg-gold py-2 rounded-full px-12 font-cormorant font-bold">Tambah Artikel</button>
            </form>

        </div>
    </div>

    <!-- Modal -->
    <div id="successModal" class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center  bg-black bg-opacity-70 rounded hidden">
        <div class="bg-[#D9D9D9] rounded-lg p-8 max-w-md flex flex-col items-center justify-center px-8 py-16">
            <h2 id="modalTitle" class="text-2xl font-outfit font-bold mb-4">Artikel Telah Disimpan!</h2>
            <p class="text-lg text-center"><span id="articleTitlePlaceholder"></span> telah berhasil disimpan.</p>
            <a href="{{ route('viewsNews') }}" class="bg-gold text-black px-10 py-2 rounded-full mt-4">Kembali</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('submitForm').addEventListener('click', function () {
                var formData = new FormData(document.getElementById('articleForm'));

                fetch('{{ route("storeNews") }}', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => {
                    if (response.ok) {
                        var articleTitle = document.getElementById('title').value;
                        document.getElementById('modalTitle').textContent = "Artikel Telah Disimpan!";
                        document.getElementById('articleTitlePlaceholder').textContent = '"' + articleTitle + '"';
                        document.getElementById('successModal').classList.remove('hidden');
                    } else {
                        console.error('Failed to save article');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>


@endsection


