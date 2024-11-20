@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white dark:border-white text-xl font-medium leading-5 text-white dark:text-gray-100 focus:outline-none focus:border-white transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm xl:text-xl 2xl:text-2xl font-medium leading-5 text-gray-400 hover:text-white dark:hover:text-white hover:border-white dark:hover:border-white focus:outline-none focus:text-white dark:focus:text-white focus:border-white dark:focus:border-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


<style>
    /* Forçar a cor branca ao passar o mouse */
a:hover,
a:focus {
    color: white !important;
    border-color: white!important; /* Cor indigo-400 */
}

</style>
