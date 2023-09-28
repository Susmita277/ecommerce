@extends('backend.layout.app')
@section('main-content')


    <div class="maincontainerof-contactpage">

        <div class="contact-page">
            <h2 id="contact-list">Contact Listing</h2>
            <form action="" method="GET">
                @csrf
                <div class=search-button-of-contact>
                <input type="search" name="search" id=""  placeholder="search fullname or email">
                <button type="submit" id="contactbtn"><i class="fa-regular fa-magnifying-glass fa-rotate-90"></i></button>
            </div>
            </form>



            <table class="styled-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" placeholder=""></th>
                        <th>Actions</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Description</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td><input type="checkbox" placeholder=""></td>
                            <td>
                                <div class="delete_edit">
                                    <div><a href="{{ route('contactform.update', $contact->id) }}">
                                            <i class="fa-light fa-pen-to-square"></i></a></div>
                                    <div>
                                        <form action="{{ route('contactform.delete', $contact->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->textarea }}</td>
                        </tr>
                    @endforeach


                </tbody>

            </table>
            {{-- <div class="pagination">{{ $contacts->links() }}</div> --}}
        </div>

    </div>

@endsection
