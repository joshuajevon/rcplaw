@props(['disabled' => false])


<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-4 border border-cDarkGrey rounded-md text-sm sm:text-base bg-cWhite autofill:shadow-[inset_0_0_0px_1000px_rgb(255,255,255)]']) !!} cols="30" rows="10"></textarea>
