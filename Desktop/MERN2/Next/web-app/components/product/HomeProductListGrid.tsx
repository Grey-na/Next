import Link from "next/link";
import Image from "next/image";
import SingleProductListItem from "./SingleProductListItem";
export default function HomeProductListGrid(){
    return(<>
    <section className="w-full mx-auto bg-primary-200 py-5">
         <div className="w-7xl mx-auto mb-8 flex items-center justify-between ">

          <h2 className=" text-4xl font-bold text-primary-600">
            Picked for you
          </h2>

        </div>
     <div className="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4 w-7xl mx-auto py-5">
        <SingleProductListItem/>
        <SingleProductListItem/>
        <SingleProductListItem/>
        <SingleProductListItem/>
        <SingleProductListItem/>
        <SingleProductListItem/>
        <SingleProductListItem/>
        <SingleProductListItem/>
    </div>
      </section>
    </>)
}