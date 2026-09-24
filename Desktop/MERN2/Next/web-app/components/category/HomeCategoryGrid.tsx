import Link from "next/link";
import Image from "next/image";
import SingleCategoryGridItem from "./SingleCategoryGridItem"
export default function HomeCategoryGrid(){
    return(
        <>
       
      {/* Featured Products Section */}
      <section className="px-10 py-12">

        <div className="mb-8 flex items-center justify-between">

          <h2 className="text-3xl font-bold text-primary-600">
            Featured Products
          </h2>

          <Link
            href="/all-products"
            className="font-semibold text-primary-600 hover:underline"
          >
            View All
          </Link>

        </div>


        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

        <SingleCategoryGridItem/>
         <SingleCategoryGridItem/>
         <SingleCategoryGridItem/>
         <SingleCategoryGridItem/>
         <SingleCategoryGridItem/>
         <SingleCategoryGridItem/>
         <SingleCategoryGridItem/>
         <SingleCategoryGridItem/>
         


          

        </div>

      </section>
        
        </>
    )
}