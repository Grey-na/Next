"use client";
import Image from "next/image"
import Link from "next/link"
import { useState } from "react"
export default function Header(){
const [showDialog, setShowDialog]= useState(false)
return(
        <>
            <div className="w-full items-center justify-center flex bg-linear-to-r from-primary-600 via-pink-600 to-accent-200 transition animate-pulse duration-500 p-2 text-white text-shadow-lg text-lg font-semibold">
                <div className="w-max animate-[marquee_5s_linear_infinite]">Hello</div>
                
                </div>
                 <header className="w-full bg-primary-100 flex justify-between px-10 py-5 shadow-lg items-center">
                    <Link rel="stylesheet" href="/" >
                        <Image height={80} width={80} alt="logo" className="size-20" src={'/images/logo-2.png'}/>
                    </Link>

                    <form action="/search" className="w-xl relative">
                        
                        <input type="search" placeholder="Enter the product.." className="w-full rounded-2xl p-3 shadow-lg border border-gray-500"/>
                        <Link href={''}>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" className="absolute right-4 top-3 translate-y-0">
                        <path d="M10.5 3a7.5 7.5 0 1 0 4.74 13.31l4.72 4.72 1.41-1.41-4.72-4.72A7.5 7.5 0 0 0 10.5 3zm0 2a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11z"/>
                        </svg>
                        </Link>
                    </form>

                    <div className=" items-center justify-between">
                        <nav>
                        <ul className="flex gap-10">
                            <li className="text-lg font-semibold text  hover:underline tracking-tight"> 
                                <Link href={"/about-us"}>About Us</Link>
                            </li>
                            <li className="text-lg font-semibold text hover:underline tracking-tight">
                                <Link href={"/all-products"}>Shop Now</Link>
                            </li>
                            <li className="text-lg font-semibold text hover:underline tracking-tight">
                                <Link href={"/cart"}>Cart List</Link>
                            </li>
                            <li className="text-lg font-semibold text hover:underline tracking-tight">
                                <Link href={"/auth"}>Sign In</Link>
                            </li>
                            <li className="text-lg font-semibold text hover:underline tracking-tight">
                                <Link href={"/login"}>Login</Link>
                            </li>
                            <li className="text-lg font-semibold text hover:underline tracking-tight" onMouseOver={()=>{
                                setShowDialog(true)
                            }}
                             onMouseLeave={()=> setShowDialog(false)}
                             >
                                <Link href={"/register"}>Register</Link>
                                {showDialog && (
                                    <div className=" top-30 w-64 rounded-lg bg-white p-4 shadow-lg border border-gray-200 z-50 absolute right-0">
                                        <h3 className="text-base font-semibold text-gray-800">
                                            Create an Account
                                        </h3>
                                        <p className="mt-1 text-sm font-normal text-gray-600">
                                            Register now to create your account and get started.
                                        </p>
                                        <Link
                                            href="/register"
                                            className="mt-3 inline-block rounded-md bg-primary-600 px-4 py-2 text-sm text-white hover:bg-primary-700"
                                        >
                                            Register Now
                                        </Link>
                                    </div>
                                )}
                            </li>
                        </ul>
                    </nav>
                    </div>
                </header>
        </>
    )
}
    
