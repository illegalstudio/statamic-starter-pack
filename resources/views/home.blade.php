<x-layout :context="$__data">
    <a href="https://illegal.studio" target="_blank" class="text-4xl tracking-widest font-montserrat font-medium mb-2">
        illegal studio
    </a>
    <article class="mt-4 bg-white p-8 shadow-xl rounded-xl max-w-xl prose">
        {!! $content !!}
    </article>
    <p class="mt-5">
        This is a <a href="https://statamic.com/" target="_blank" class="underline">Statamic</a> project
    </p>
</x-layout>
