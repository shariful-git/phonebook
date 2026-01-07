<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">
                            :message
                          </div>')) !!}
                    @endif
                    <form action="{{ route('store.contact') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Md Shariful Islam">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                    placeholder="01XXXXXXXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="example@example.com">
                        </div>

                        <div class="form-group">
                            <label for="group_name">Group Name (Optional)</label>
                            <select id="group_name" name="group_name" class="form-control rounded-0">
                                <option selected>Please select one</option>
                                <option value="family">Family</option>
                                <option value="friends">Friends</option>
                                <option value="colleagues">Colleagues</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-success rounded-0">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
