<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="navbar-start">
                <div class="block">
                    <h1 class="title is-4">{{ $category->name }}</h1>
                    <h2 class="subtitle is-6 is-italic">
                        {!! $category->type !!}
                    </h2>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <!-- Formulier voor het verwijderen van de bar -->
                        <x-ui.modal name="delete" title="Confirm delete">
                            <x-slot:content>
                                <form id="delete-category" method="POST" action="{{ route('categories.destroy', $category) }}">
                                    @csrf
                                    @method('DELETE')
                                    <p>Click <strong>Confirm</strong> to delete this Category.<br>
                                        <strong class="has-text-danger">CAUTION!</strong> This action cannot be undone.</p>
                                </form>
                            </x-slot:content>

                            <x-slot:footer>
                                <button type="submit" form="delete-category" class="button is-danger">Confirm</button>
                                <label for="delete-modal" class="button">Cancel</label>
                            </x-slot:footer>
                        </x-ui.modal>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
     <span style="background-color : {{ $category->is_active == 1 ? 'grey' : '' }}">
            {!! $category->is_active !!}
     </span>
            <br>
            {{$category->created_at}}
        </div>
    </div>
</x-main>
