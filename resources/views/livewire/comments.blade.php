<!DOCTYPE html>
<html lang="en">
        <head>
            <title>Registration Form</title>
        </head>
        <body>
            <div class="flex justify-center items-center h-screen bg-slate-200 text-sm">
                <div class="block bg-slate-50 p-6 rounded-xl shadow-md shadow-slate-300 w-90 " >
                    <form method="POST" action="/submit-form">
                        @csrf
                        <h2 class="text-blue-700 text-3xl font-semibold my-4" >Register</h2>
                        {{-- full name --}}
                            <div id="fullName" class="flex flex-row space-x-4">
                                {{-- first name --}}
                                <div id="firstName" class="w-1/2 ">
                                    <label for="fname" class="" >First Name</label><br>
                                    <input type="text" name="" id="fname" class="h-8 w-full mb-3 rounded-md border border-slate-300  pl-2 bg-transparent outline-blue-600 shadow-sm">
                                </div>
                                {{-- last name --}}
                                <div id="lastName" class="w-1/2">
                                    <label for="lname" class="" >Last Name</label><br>
                                    <input type="text" name="" id="lname" class="h-8 w-full mb-3 rounded-md border border-slate-300  pl-2 bg-transparent outline-blue-600 shadow-sm">
                                </div>
                            </div>
                            {{-- email --}}
                            <label for="email" class="" >Email</label><br>
                                 <input type="email" name="" id="email" class="h-8 w-full mb-3 rounded-md border border-slate-300  pl-2 bg-transparent outline-blue-600 shadow-sm">
                            {{-- password --}}
                            <livewire:show-password />
                            <livewire:confirm-password />

                            {{-- Confirm-password --}}
                           
                            {{-- radio button --}}
                                 <div id="gender" class=""></div>
                                    <p class="mt-1 mb-3">Gender</p>
                                    <input type="radio" name="gender" id="male" class=" mx-1" checked><label for="male">Male</label>
                                    <input type="radio" name="gender" id="male" class=" mx-1"><label for="female">Female</label>
                                    <input type="radio" name="gender" id="male" class=" mx-1"><label for="other">Other</label>
                                    
                            {{-- sign-up --}}
                             <input type="submit" name="" id="signUp" class="bg-blue-700 mt-3 w-full h-10 cursor-pointer text-white rounded-md hover:bg-blue-600 hover:outline outline-2 outline-blue-600 outline-offset-2">
                           
                            <br>     
                            <p class="text-xs my-2">Already have an account?<a href="#" class="text-blue-600">Login</a></p>    
                    </form>
                </div>
            </div>
        </body>
</html>