import Image from "next/image";
import HomeHero from "@/components/hero/HomeHero";
import HomeCategoryGrid from "@/components/category/HomeCategoryGrid";
import HomeProductListGrid from "@/components/product/HomeProductListGrid";
export default function Home() {
  return (
    <>
     <HomeHero/>
     <HomeCategoryGrid/>
     <HomeProductListGrid/>
    </>
   
  )
}
