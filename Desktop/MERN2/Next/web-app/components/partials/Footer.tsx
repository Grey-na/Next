
import Image from "next/image";
import Link from "next/link";

export default function Footer() {
  return (
    <footer className="bg-primary-600 text-white">

      {/* Main Footer */}
      <div className="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-10 py-12 sm:grid-cols-2 lg:grid-cols-4">

        {/* Logo and Description */}
        <div className="flex flex-col gap-4">

          <Link href="/">
            <Image
              src="/images/logo-2.png"
              alt="Logo"
              width={80}
              height={80}
              className="size-20 object-contain"
            />
          </Link>

          <p className="max-w-xs text-sm leading-6 text-primary-100">
            Your trusted destination for quality products
            and an amazing shopping experience.
          </p>

        </div>


        {/* Quick Links */}
        <div>

          <h3 className="mb-4 text-lg font-semibold">
            Quick Links
          </h3>

          <ul className="flex flex-col gap-3 text-sm text-primary-100">

            <li>
              <Link
                href="/"
                className="transition hover:text-white hover:underline"
              >
                Home
              </Link>
            </li>

            <li>
              <Link
                href="/about-us"
                className="transition hover:text-white hover:underline"
              >
                About Us
              </Link>
            </li>

            <li>
              <Link
                href="/all-products"
                className="transition hover:text-white hover:underline"
              >
                Shop Now
              </Link>
            </li>

            <li>
              <Link
                href="/cart"
                className="transition hover:text-white hover:underline"
              >
                Cart List
              </Link>
            </li>

          </ul>

        </div>


        {/* Customer Support */}
        <div>

          <h3 className="mb-4 text-lg font-semibold">
            Customer Support
          </h3>

          <ul className="flex flex-col gap-3 text-sm text-primary-100">

            <li>
              <Link
                href="/contact"
                className="transition hover:text-white hover:underline"
              >
                Contact Us
              </Link>
            </li>

            <li>
              <Link
                href="/faq"
                className="transition hover:text-white hover:underline"
              >
                FAQs
              </Link>
            </li>

            <li>
              <Link
                href="/shipping"
                className="transition hover:text-white hover:underline"
              >
                Shipping Information
              </Link>
            </li>

            <li>
              <Link
                href="/returns"
                className="transition hover:text-white hover:underline"
              >
                Returns & Refunds
              </Link>
            </li>

          </ul>

        </div>


        {/* Contact Information */}
        <div>

          <h3 className="mb-4 text-lg font-semibold">
            Get In Touch
          </h3>

          <ul className="flex flex-col gap-3 text-sm text-primary-100">

            <li>
              Email: support@example.com
            </li>

            <li>
              Phone: +977 98XXXXXXXX
            </li>

            <li>
              Location: Kathmandu, Nepal
            </li>

          </ul>

        </div>

      </div>


      {/* Bottom Footer */}
      <div className="border-t border-white/20 px-10 py-5">

        <div className="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 text-sm text-primary-100 sm:flex-row">

          <p>
            © {new Date().getFullYear()} Your Store. All rights reserved.
          </p>

          <div className="flex gap-5">

            <Link
              href="/privacy-policy"
              className="transition hover:text-white hover:underline"
            >
              Privacy Policy
            </Link>

            <Link
              href="/terms"
              className="transition hover:text-white hover:underline"
            >
              Terms & Conditions
            </Link>

          </div>

        </div>

      </div>

    </footer>
  );
}