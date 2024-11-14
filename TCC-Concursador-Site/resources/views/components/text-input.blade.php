@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge([
        'class' => 'border-gray-300 text-black focus:border-[#435D86] focus:ring-[#435D86] rounded-md shadow-sm disabled:bg-gray-100 disabled:border-gray-300 disabled:text-gray-500'
    ]) !!}>
