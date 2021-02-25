<x-admin-master>

    @section('content')


        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
        <dl class="row">
            <dt class="col-sm-3">Description lists</dt>
            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

            <dt class="col-sm-3">Term</dt>
            <dd class="col-sm-9">
                <p>Definition for the term.</p>
                <p>And some more placeholder definition text.</p>
            </dd>

            <dt class="col-sm-3">Another term</dt>
            <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
            <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>

            <dt class="col-sm-3">Nesting</dt>
            <dd class="col-sm-9">
                <dl class="row">
                    <dt class="col-sm-4">Nested definition list</dt>
                    <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
                </dl>
            </dd>
        </dl>





    @endsection



</x-admin-master>
