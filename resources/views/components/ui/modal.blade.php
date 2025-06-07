@props(['name', 'title', 'trigger' => 'Delete'])

<label for="{{ $name }}-modal" class="button is-danger is-small">{{ $trigger }}</label>
<input type="checkbox" id="{{ $name }}-modal" hidden>

<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">{{ $title }}</p>
            <label for="{{ $name }}-modal" class="delete"></label>
        </header>
        <footer class="modal-card-foot">
            {{ $footer }}
        </footer>
    </div>
</div>

<style>.modal { display: none; } #{{ $name }}-modal:checked + .modal { display: flex; }</style>
