<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="{{asset('styles/style.css')}}">
        </head>
        <body class="mb-3">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-5">
                                <a href="{{route('create')}}">
                                    <button class="border-2 rounded p-2">Add Membership</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            @if (session()->get('message'))
                                <p x-data="{show:true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="text-success">{{session()->get('message')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="mb-5 text-center text-info">
                                <h4>Membership Details</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="mb-4">
                                <form action="{{route('home')}}" method="get" accept-charset="UTF-8" role="search">
                                        <div class="d-flex">
                                            <input class="form-control me-1" type="search" placeholder="search..." name="search" value="{{request('search')}}"/>
                                            <input class="form-control flex-1" value="Search" type="submit" />
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 mx-auto">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{route('export')}}">
                                        <button type="submit" class="border-1 bg-success p-1 rounded text-white">Export</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{route('pdf')}}">
                                        <button type="submit" class="border-1 bg-secondary ps-2 pe-2 p-1 rounded text-white">Pdf</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="w-100 mb-3">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>D.O.B</th>
                                        <th>City</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                        <td>{{$members->firstItem()+$loop->index}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->phone}}</td>
                                        <td>{{$member->dob}}</td>
                                        <td>{{$member->city}}</td>
                                        <td>
                                            <img class="image mx-auto" src="{{asset('images/'. $member->image)}}" alt="{{$member->id}}" />
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('edit', $member->id)}}">
                                                <button class="bg-primary text-white p-1 me-1 rounded">Edit</button>
                                            </a>
                                            <a href="{{route('delete', $member->id)}}" onclick="return confirm('Are you sure to delete it ?')">
                                                <button class="bg-danger text-white p-1 rounded">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3 mb-3">
                                {!! $members->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
    </html>
</x-app-layout>