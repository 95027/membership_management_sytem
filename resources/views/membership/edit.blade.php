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
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto mt-5 mb-5">
                        <h4 class="mb-4 text-primary">Update your membership details</h4>
                        <form action="{{route('update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" type="hidden" name="id" value="{{$member->id}}" />
                                <label class="form-label" for="">Name Of Applicant :</label>
                                <input class="form-control" type="text" name="name" placeholder="Name" value="{{$member->name}}" />
                                <span class="text-danger pt-2">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Enter your email Id :</label>
                                <input class="form-control" type="text" name="email" placeholder="Email" value="{{$member->email}}" />
                                <span class="text-danger pt-2">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Enter your phone number :</label>
                                <input class="form-control" type="text" name="phone" placeholder="Phone number" value="{{$member->phone}}" />
                                <span class="text-danger pt-2">
                                    @error('phone')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Enter your d.o.b :</label>
                                <input class="form-control" type="date" name="dob" placeholder="dd/mm/yyyy" value="{{$member->dob}}" />
                                <span class="text-danger pt-2">
                                    @error('dob')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Select your country :</label>
                                <select name="country" id="country" class="form-select" onchange="feedStates()">
                                    <option value="">--select one--</option>
                                    <option value="india" >India</option>
                                    <option value="usa" >Usa</option>
{{--                                     <option value="Italy" {{old('country', $member->country) == "Italy" ? 'selected' : ''}}>Italy</option>
{{old('country', $member->country) == "india" ? 'selected' : ''}}
{{old('country', $member->country) == "usa" ? 'selected' : ''}}
 --}}
                                </select>
                                <span class="text-danger pt-2">
                                    @error('country')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Select your state :</label>
                                <select name="state" id="state" class="form-select" onchange="feedCities()">
                                    <option value="">--select one--</option>
                                </select>
                                <span class="text-danger pt-2">
                                    @error('state')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Select your district :</label>
                                <select name="district" id="district" class="form-select">
                                    <option value="">--select one--</option>
{{--                                     <option value="Nellore" {{old('district', $member->district) == "Nellore" ? 'selected' : ''}}>Nellore</option>
                                    <option value="Chittor" {{old('district', $member->district) == "Chittor" ? 'selected' : ''}}>Chittor</option>
                                    <option value="Guntur" {{old('district', $member->district) == "Guntur" ? 'selected' : ''}}>Guntur</option>
                                    <option value="Ongole" {{old('district', $member->district) == "Ongole" ? 'selected' : ''}}>Ongole</option>
                                    <option value="Hyderabad" {{old('district', $member->district) == "Hyderabad" ? 'selected' : ''}}>Hyderabad</option> --}}
                                </select>
                                <span class="text-danger pt-2">
                                    @error('district')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Enter your city :</label>
                                <input class="form-control" type="text" name="city" placeholder="City"value="{{$member->city}}"/>
                                <span class="text-danger pt-2">
                                    @error('city')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Enter your address :</label>
                                <input class="form-control" type="text" name="address" placeholder="Address" value="{{$member->address}}"/>
                                <span class="text-danger pt-2">
                                    @error('address')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Enter your pincode :</label>
                                <input class="form-control" type="text" name="pincode" placeholder="Pincode" value="{{$member->pincode}}"/>
                                <span class="text-danger pt-2">
                                    @error('pincode')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Choose your image :</label>
                                <input class="form-control" type="file" name="image" accept=".png, .jpg, .jpeg, .svg"/>
                                <span class="text-danger pt-2">
                                    @error('image')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="">Enter your message :</label>
                                <textarea class="form-control" type="text" name="remarks" placeholder="Anything to say ?" value={{$member->remarks}}>{{$member->remarks}}</textarea>
                                <span class="text-danger pt-2">
                                    @error('remarks')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3 text-right">
                                <input type="submit" value="update" class="border-2 p-2 bg-primary text-white rounded"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            
            const selCountry = document.getElementById('country');
            const selState = document.getElementById('state');
            const selCity = document.getElementById('district');
    
            var stateOptions = {
                india: ["Telangana", "AndhraPradesh", "Maharashtra", "Kerala"],
                usa: ["NewYork", "California", "Texas"],
            };
    
            var cityOptions = {
                Telangana: ["Secunderabad", "Kukatpally", "Gachibowli"],
                AndhraPradesh: ["Guntur", "Machilipatnam", "Tirupati"],
                Maharashtra: ["Thane", "Navi Mumbai"],
                Kerala: ["Kollam", "Alappuzha"],
                newYork : ["newYork1", "newYork2"],
                California : ["California1", "California2"],
                Texas : ["Texas1", "Texas2"]
            };
    
            function feedStates(){
                let selectedCountry = selCountry.value;
    
                selState.innerHTML = "";
    
                const states = stateOptions[selectedCountry];
                
                for (let i = 0; i < states.length; i++) {
                    let option = document.createElement('option');
                
                    option.value = states[i];
                    option.text = states[i];
    
                    selState.append(option);
                }
                feedCities();
            }
    
            function feedCities(){
                let selectedState = selState.value;
    
            selCity.innerHTML = "";
    
                const cities = cityOptions[selectedState];
    
                for (let i = 0; i < cities.length; i++) {
    
                    let option = document.createElement('option');
                    option.value = cities[i];
                    option.text = cities[i];
    
                    selCity.append(option);
                }
            }
        </script>
    </body>
    </html>
</x-app-layout>