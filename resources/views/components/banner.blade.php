@props(['color', 'message'])

<div x-data="{ open: true }" x-init="setTimeout(() => open = false, 3000)" x-show="open"
    class="banner fixed top-0 left-1/2 transform -translate-x-1/2 bg-{{$color}}-500 text-white px-48 py-3"
    >
    <p>{{ $message }}</p>
</div>
