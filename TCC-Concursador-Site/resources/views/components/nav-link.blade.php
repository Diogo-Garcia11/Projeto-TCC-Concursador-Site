@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-white dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black dark:text-gray-400 hover:text-white dark:hover:text-white hover:border-indigo-400 dark:hover:border-indigo-700 focus:outline-none focus:text-white dark:focus:text-white focus:border-indigo-400 dark:focus:border-indigo-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


<style>
    /* Forçar a cor branca ao passar o mouse */
a:hover,
a:focus {
    color: white !important;
    border-color: #9078FF!important; /* Cor indigo-400 */
}

</style>
