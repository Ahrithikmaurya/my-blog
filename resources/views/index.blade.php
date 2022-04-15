@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 m-auto h-screen" style="
    background-image: url('https://www.teahub.io/photos/full/315-3152289_wallpaper-card-letter-paper-pen-vintage-ink-pen.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height:700px;
    ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-6xl uppercase font-bold text-shadow-md pb-4">
                    Hello!
                </h1>
                <h2 class="sm:text-white text-4xl uppercase font-bold text-shadow-md pb-14"> Welcome To My Blog!</h2>
                <a
                    href="#about"
                    class="text-center bg-gray-50 text-gray-700 border border-gray-100 rounded-full hover:bg-transparent hover:text-gray-100 py-2 px-6 font-bold text-xl">
                    Find Out More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 h-screen">
        <div class="m-auto">
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-700">
                Interested in Poetry Reading?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                As I have observed from the past few years, people appreciate good art without considering the origin
                or the method of development of it. They want to look at, listen, smell, taste new things and if it mesmerizes them, then they want to know more about it's history,
                origin and other things.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
              In these blogs you will find many poems in hindi and in english exclusively written by me and I hope that you'll also
              feel the love hidden behind them.
            </p>

            <a
                href="/myblogproject/public/blog"
                class="uppercase bg-blue-500 text-gray-100 border border-blue-500 hover:bg-transparent hover:text-blue-500 ext-s font-extrabold py-2 px-8 rounded-full">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white h-screen" id="about">
        <h2 class="text-2xl pb-5 text-xl pt-20">
            I'm interested in...
        </h2>

        <a href="https://www.instagram.com/waking.thoughts/" class="font-extrabold block text-6xl py-5 hover:text-gray-400 text-gray-100">
            Poetry
        </a>
        <a href="https://www.inkitt.com/abhishek120" class="font-extrabold block text-6xl py-5 hover:text-gray-400 text-gray-100">
            Story Telling
        </a>
        <a href="https://www.instagram.com/abhi.s.1289/" class="font-extrabold block text-6xl py-5 hover:text-gray-400 text-gray-100">
            Photography
        </a>
        <a href="https://www.hackerrank.com/a1289sahu" class="font-extrabold block text-6xl py-5 hover:text-gray-400 text-gray-100">
            Coding
        </a>
    </div>
<div class="h-screen">
  <div class="text-center py-15">
      <span class="uppercase text-s text-gray-400">
          Blog
      </span>

      <h2 class="text-4xl font-bold py-10">
          Recent Posts
      </h2>

      <p class="m-auto w-4/5 text-gray-500">
          I know it has been fun till now and I hope that you loved my work however witout taking more of your time
        , let's jump into my blog posts. Here are some recents that I've posted on the website. Check it out!</p>
  </div>

  <div class="sm:grid grid-cols-2 w-4/5 m-auto">
      <div class="flex bg-pink-600 text-gray-100 pt-10">
          <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
              <span class="uppercase text-xs">
                  Poetry
              </span>

              <h3 class="text-xl font-bold py-10">
                  Get ready to lose yourself in the magic of the words and try to find the hidden meaning behind them.</h3>

              <a
                  href=""
                  class="uppercase bg-gray-100 hover:bg-transparent hover:text-gray-100 border border-gray-100 text-pink-600 text-xs font-extrabold py-3 px-6 rounded-3xl">
                  Read more
              </a>
          </div>
      </div>
      <div>
          <img src="https://media.istockphoto.com/photos/vintage-old-red-quill-pen-with-inkwell-on-wooden-table-front-gradient-picture-id1055062454?k=6&m=1055062454&s=612x612&w=0&h=fTwpb07AhtN_6owcl7jjtNCkLO7caB9tPYg1sQ-QmPA=" alt="feather pen">
      </div>
  </div>
</div>

@endsection
