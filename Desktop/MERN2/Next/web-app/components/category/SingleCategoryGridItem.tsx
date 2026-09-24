import Link from "next/link";
import Image from "next/image";
export default function SingleCategoryGridItem()
{
    return(<>
          {/* Product Card 1 */}
          <div className="rounded-lg border border-primary-100 p-4 shadow-md hover:scale-105 transition duration-300 hover:shadow-lg">

            <div className="relative h-48 w-full hover: scale-105 transition duration-300">
                <Link href="/category/category-slug" className="hover:underline">
                <div className="flex h-40 w-full object-cover">
              <Image
                src="https://img.drz.lazcdn.com/static/np/p/95c12787a556ca7a983dc9efd435b90b.jpg_400x400q75.avif"
                fill
                alt="Product 1"
                className="rounded-md object-contain"
              />
              </div>
              </Link>
            </div>

            <h3 className="mt-4 font-semibold text-primary-600">
              Product One
            </h3>

            <p className="mt-2 text-lg font-bold text-primary-600">
              Rs. 1,500
            </p>

            <Link
              href="/all-products"
              className="mt-4 block rounded-md bg-primary-600 px-4 py-2 text-center text-white hover:bg-primary-700"
            >
              View Product
            </Link>

          </div>
    </>)
}