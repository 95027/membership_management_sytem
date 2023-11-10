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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="mb-5 text-center text-info">
                                <h4>Membership Details</h4>
                            </div>
                            @if(count($members) > 0)
                            <table class="w-100">
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
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>
                                            @if($new == $member->id)
                                            {{$member->phone}}
                                            @else
                                            93********
                                            @endif
                                        </td>
                                        <td>{{$member->dob}}</td>
                                        <td>{{$member->city}}</td>
                                        <td>
                                            <img class="image mx-auto" src="{{asset('images/' . $member->image)}}" alt="{{$member->id}}" />
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
                            @else
                            <h5 class="text-danger text-center">No records found....</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </body>
    </html>
</x-app-layout>
