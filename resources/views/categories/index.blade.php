<x-main>
    <div class="container">
        <div class="columns mt-6 mb-6">
            <div class="column">
                <p class="title is-2">All the categories</p>
            </div>
            <div class="column">
                <a href="{{ route('categories.create') }}" class="button is-primary is-pulled-right">
                    Add A New Category
                </a>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">
                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th style="width: 20%">Name</th>
                                <th style="width: 40%">Type</th>
                                <th style="width: 10%">Is Active</th>
                                <th style="width: 10%">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->type }}</td>
                                    <td> <span style="background-color : {{ $category->is_active == 1 ? 'grey' : '' }}">
                                        {!! $category->is_active !!}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <div class="field has-addons">
                                            <a href="{{ route('categories.show', $category) }}" class="button is-info is-small">Show</a>
                                            <a href="{{ route('categories.edit', $category) }}" class="button is-light is-small">Edit</a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main>
