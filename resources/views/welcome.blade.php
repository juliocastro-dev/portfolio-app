<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- Menu -->
        <div class="container w-[80%] mx-auto flex justify-between p-10">
            <div id="logo">Portfolio.</div>
            <div>
                <ul class="flex space-x-4 font-custom">
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
                        <p class="font-custom text-[1rem] font-extrabold">Hello It's me</p>
                        <p class="font-sen text-[2.5rem] font-extrabold">Julio Castro</p>
                        <p class="font-custom text-[1.5rem] font-extrabold">And I'm a <span class="text-secondary">Full Stack Developer</span></p>
                        <p class="font-custom w-96">
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
            Our Services
        </div>
        <!-- End Section Services -->
        <!-- Section Contact  -->
        <div class="w-full bg-bgSecondary">
            <div class="container mx-auto p-10">
                Contact
            </div>
        </div>
        <!-- End Section Contact -->
    </body>
</html>
