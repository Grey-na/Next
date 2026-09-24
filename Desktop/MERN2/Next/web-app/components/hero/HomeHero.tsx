
"use client";

import Image from "next/image";
import Link from "next/link";

import { Swiper, SwiperSlide } from "swiper/react";
import { Navigation, Pagination, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import HomeCategoryGrid from "../category/HomeCategoryGrid";

export default function HomeHero() {
  return (
    <>

      {/* Hero Slider */}
      <section className="w-full my-5 ">

       <div className="w-7xl mx-auto">
         <Swiper
          modules={[Navigation, Pagination, Autoplay]}
          navigation
          pagination={{ clickable: true }}
          autoplay={{
            delay: 3000,
            disableOnInteraction: false,
          }}
          loop={true}
          className="h-[400px] w-full"
        >

          {/* Slide 1 */}
          <SwiperSlide>
              <Image
                src="https://img.lazcdn.com/us/domino/0e9a024e-e2b3-46c6-bd58-f09d4962053f_NP-1976-688.jpg"
                alt="Featured products"
                className="w-full"
                height={350}
                width={1440}
              />
          </SwiperSlide>


          {/* Slide 2 */}
          <SwiperSlide>

              <Image
                src="https://img.lazcdn.com/us/domino/018c16cd-8ee2-4036-935b-3aa394033fcf_NP-1976-688.jpg"
                alt="New collection"
                className="w-full"
                height={350}
                width={1440}
              />
          </SwiperSlide>


          {/* Slide 3 */}
          <SwiperSlide>
              <Image
                src="https://img.lazcdn.com/us/domino/2eb05b8c-3e7c-469d-a025-48c14fba5288_NP-1976-688.jpg"
                alt="Special offers"
                fill
                className="object-cover"
              />
          </SwiperSlide>
        </Swiper>
        </div>

      </section>


      {/* Features Section */}
      <section className="grid grid-cols-1 gap-6 px-10 py-12 sm:grid-cols-2 lg:grid-cols-3">

        <div className="rounded-lg bg-primary-100 p-6 text-center">

          <h2 className="text-xl font-semibold text-primary-600">
            Quality Products
          </h2>

          <p className="mt-2 text-sm text-slate-600">
            Discover products selected for your needs.
          </p>

        </div>


        <div className="rounded-lg bg-primary-100 p-6 text-center">

          <h2 className="text-xl font-semibold text-primary-600">
            Easy Shopping
          </h2>

          <p className="mt-2 text-sm text-slate-600">
            Browse products and enjoy a simple experience.
          </p>

        </div>


        <div className="rounded-lg bg-primary-100 p-6 text-center">

          <h2 className="text-xl font-semibold text-primary-600">
            Customer Support
          </h2>

          <p className="mt-2 text-sm text-slate-600">
            We are here to help you with your questions.
          </p>

        </div>

      </section>
     



    </>
  );
}