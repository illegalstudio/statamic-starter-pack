@aware(['page'])
@if ($page->og_title)
    <meta name="og:title" content="{{ $page->og_title }}">
@endif
@if ($page->og_type)
    <meta name="og:type" content="{{ $page->og_type }}">
@endif
@if ($page->og_url)
    <meta name="og:url" content="{{ $page->og_url }}">
@endif
@if ($page->og_image)
    <meta name="og:image" content="{{ $page->og_image }}">
@endif
@if ($page->og_site_name)
    <meta name="og:site_name" content="{{ $page->og_site_name }}">
@endif
@if ($page->og_description)
    <meta name="og:description" content="{{ $page->og_description }}">
@endif
@if ($page->og_email)
    <meta name="og:email" content="{{ $page->og_email }}">
@endif
@if ($page->og_phone_number)
    <meta name="og:phone_number" content="{{ $page->og_phone_number }}">
@endif
@if ($page->og_fax_number)
    <meta name="og:fax_number" content="{{ $page->og_fax_number }}">
@endif
@if ($page->og_latitude)
    <meta name="og:latitude" content="{{ $page->og_latitude }}">
@endif
@if ($page->og_longitude)
    <meta name="og:longitude" content="{{ $page->og_longitude }}">
@endif
@if ($page->og_street_address)
    <meta name="og:street-address" content="{{ $page->og_street_address }}">
@endif
@if ($page->og_locality)
    <meta name="og:locality" content="{{ $page->og_locality }}">
@endif
@if ($page->og_region)
    <meta name="og:region" content="{{ $page->og_region }}">
@endif
@if ($page->og_postal_code)
    <meta name="og:postal-code" content="{{ $page->og_postal_code }}">
@endif
@if ($page->og_country_name)
    <meta name="og:country-name" content="{{ $page->og_country_name }}">
@endif
@if ($page->og_video)
    <meta name="og:video" content="{{ $page->og_video }}">
@endif
@if ($page->og_video_type)
    <meta name="og:video:type" content="{{ $page->og_video_type }}">
@endif
@if ($page->og_audio)
    <meta name="og:audio" content="{{ $page->og_audio }}">
@endif
@if ($page->og_audio_title)
    <meta name="og:audio:title" content="{{ $page->og_audio_title }}">
@endif
@if ($page->og_audio_artist)
    <meta name="og:audio:artist" content="{{ $page->og_audio_artist }}">
@endif
@if ($page->og_audio_album)
    <meta name="og:audio:album" content="{{ $page->og_audio_album }}">
@endif
@if ($page->og_audio_type)
    <meta name="og:audio:type" content="{{ $page->og_audio_type }}">
@endif
