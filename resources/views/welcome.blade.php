<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- Menu -->
        <div class="container w-[80%] mx-auto flex justify-between p-10">
            <div id="logo">Portfolio.</div>
            <div>
                <ul class="flex space-x-4 font-inter">
                    <li><a href="#" class="hover:text-secondary">Home</a></li>
                    <li><a href="#" class="hover:text-secondary">About</a></li>
                    <li><a href="#" class="hover:text-secondary">Services</a></li>
                    <li><a href="#" class="hover:text-secondary">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- End Menu -->
        <!-- Section Home -->
        <div class="container mx-auto p-10">
            <div class="flex justify-around">
                <div class="flex flex-1 items-start">
                    <div class="mx-auto mt-10">
                        <p class="font-inter text-[1rem] font-extrabold">Hello It's me</p>
                        <p class="font-sen text-[2.5rem] font-extrabold">Julio Castro</p>
                        <p class="font-inter text-[1.5rem] font-extrabold">And I'm a <span class="text-secondary">Full Stack Developer</span></p>
                        <p class="font-inter w-96">
                            Lorem ipsum dolor sit amet consectetur. Augue tellus arcu sit quis. Aliquam urna varius semper mus nulla tincidunt dui iaculis.
                        </p>
                        <button class="bg-secondary py-2 px-6 rounded-md shadow-secondary shadow-md hover:shadow-none font-roboto font-bold mt-5">Download CV</button>
                    </div>
                </div>
                <div class="mr-6">
                    <img src="{{ asset('images/banner_image.png') }}" alt="Imagem profile" width="460">
                </div>
            </div>
        </div>
        <!-- End Section Home -->
        <!-- Section About  -->
        <div class="w-full bg-bgSecondary">
            <div class="container w-[90%] mx-auto flex justify-between p-10 gap-16 min-h-[500px]">
                    <img src="{{ asset('images/aboutme_image.png') }}" width="400"/>
                    <div class="mt-10">
                        <p class="font-sen font-extrabold text-[2rem]">
                            About <span class="text-secondary">Me</span>
                        </p>
                        <p class="font-sen text-[1rem]">Full Stack Developer</p>
                        <p class="font-sen text-sm mt-5">
                        Lorem ipsum dolor sit amet consectetur. Adipiscing consectetur gravida quis pellentesque in lectus nisl mauris. Mauris pharetra volutpat fringilla gravida proin scelerisque platea. Nibh nisl est et ullamcorper morbi. Nisl a in sit venenatis nisl ultrices eu arcu.
                        Lorem ipsum dolor sit amet consectetur. Adipiscing consectetur gravida quis pellentesque in lectus nisl mauris. Mauris pharetra volutpat fringilla gravida proin scelerisque platea. Nibh nisl est et ullamcorper morbi. Nisl a in sit venenatis nisl ultrices eu arcu.
                        </p>
                        <button class="bg-secondary py-2 px-6 rounded-md shadow-secondary shadow-md hover:shadow-none font-roboto font-bold mt-5">Read more</button>
                    </div>
            </div>
        </div>
        <!-- End Section About -->
        <!-- Section Services  -->
        <div class="container mx-auto p-10">
            <div class="container mx-auto text-center font-sen font-extrabold text-[2rem]">
                Our <span class="text-secondary">Services</span>
            </div>
            <div class="w-full flex justify-evenly p-6">
                <div class="w-[300px] h-[350px] bg-bgSecondary rounded-lg grid justify-items-center p-4">
                    <img src="{{ asset('images/brush_icon.png') }}" class="mt-3" />
                    <p class="font-inter font-extrabold text-[1.3rem]">Frontend Development</p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur. Adipiscing consectetur gravida quis pellentesque in lectus nisl mauris.</p>
                    <button class="bg-secondary w-32 h-10 rounded-md shadow-secondary shadow-md hover:shadow-none font-roboto font-bold">Read more</button>
                </div>
                <div class="w-[300px] h-[350px] bg-bgSecondary rounded-lg grid justify-items-center p-4">
                    <i class="fa fa-code text-secondary text-[3rem] mt-5" aria-hidden="true"></i>
                    <p class="font-inter font-extrabold text-[1.3rem]">Backend Development</p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur. Adipiscing consectetur gravida quis pellentesque in lectus nisl mauris.</p>
                    <button class="bg-secondary w-32 h-10 rounded-md shadow-secondary shadow-md hover:shadow-none font-roboto font-bold">Read more</button>
                </div>
                <div class="w-[300px] h-[350px] bg-bgSecondary rounded-lg grid justify-items-center p-4">
                    <img src="{{ asset('images/internet_icon.png') }}" class="mt-3" />
                    <p class="font-inter font-extrabold text-[1.3rem]">Web Development</p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur. Adipiscing consectetur gravida quis pellentesque in lectus nisl mauris.</p>
                    <button class="bg-secondary w-32 h-10 rounded-md shadow-secondary shadow-md hover:shadow-none font-roboto font-bold">Read more</button>
                </div>
            </div>
        </div>
        <!-- End Section Services -->
        <!-- Section Contact  -->
        <div class="w-full bg-bgSecondary">
            <div class="container mx-auto p-10">
                <div class="container mx-auto text-center font-sen font-extrabold text-[2rem]">
                    Contact <span class="text-secondary">Me!</span>
                </div>
                <div class="container mx-auto w-[85%] grid mt-5">
                    <div class="w-full flex justify-between gap-3">
                        <input type="text" class="bg-bgMain w-[50%] h-12 rounded-lg p-3" placeholder="First Name">
                        <input type="text" class="bg-bgMain w-[50%] h-12 rounded-lg p-3" placeholder="Last Name">
                    </div>
                    <div class="w-full flex justify-between gap-3 mt-2">
                        <input type="text" class="bg-bgMain w-[50%] h-12 rounded-lg p-3" placeholder="Mob. Number">
                        <input type="text" class="bg-bgMain w-[50%] h-12 rounded-lg p-3" placeholder="Email Address">
                    </div>
                    <div class="w-full mt-2">
                        <textarea name="message" id="message" cols="10" rows="9" class="w-full rounded-lg bg-bgMain p-3" placeholder="Your Message"></textarea>
                    </div>
                    <div class="w-full mt-2 text-right">
                        <button class="bg-secondary w-32 h-8 rounded-md shadow-secondary shadow-md hover:shadow-none font-roboto font-medium">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Contact -->
    </body>
</html>
