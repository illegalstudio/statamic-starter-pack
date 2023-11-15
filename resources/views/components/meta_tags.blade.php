@aware(['page'])
@if ($page->meta_description)
    <meta name="description" content="{{ $page->meta_description }}">
@endif
@if ($page->meta_keywords)
    <meta name="keywords" content="{{ $page->meta_keywords }}">
@endif
@if ($page->meta_subject)
    <meta name="subject" content="{{ $page->meta_subject }}">
@endif
@if ($page->meta_copyright)
    <meta name="copyright" content="{{ $page->meta_copyright }}">
@endif
@if ($page->meta_language)
    <meta name="language" content="{{ $page->meta_language }}">
@endif
@if ($page->meta_robots)
    <meta name="robots" content="{{ $page->meta_robots }}">
@endif
@if ($page->meta_abstract)
    <meta name="abstract" content="{{ $page->meta_abstract }}">
@endif
@if ($page->meta_topic)
    <meta name="topic" content="{{ $page->meta_topic }}">
@endif
@if ($page->meta_summary)
    <meta name="summary" content="{{ $page->meta_summary }}">
@endif
@if ($page->meta_revisit_after)
    <meta name="revisit_after" content="{{ $page->meta_revisit_after }}">
@endif
