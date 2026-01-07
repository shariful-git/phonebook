<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <nav class="navbar navbar-light float-right">
                        <form class="form-inline" method="POST" action="{{route('search.contact')}}">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Mobile" name="mobile" aria-label="Search">
                                <button class="btn btn-outline-success rounded-0" type="submit">Search</button>
                            </div>
                        </form>
                    </nav>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Modified</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td> {{ $contact->name }} </td>
                                    <td> {{ $contact->mobile }} </td>
                                    <td> {{ $contact->email }} </td>
                                    <td> {{ date('d-m-Y H:i:s', strtotime($contact->created_at)) }} </td>
                                    <td> {{ date('d-m-Y H:i:s', strtotime($contact->updated_at)) }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contacts->withQueryString() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
