'use client';

import { zodResolver } from "@hookform/resolvers/zod";
import { Controller, useForm } from "react-hook-form";
import * as z from "zod";

const LoginSchema = z.object({
    username: z.email("Invalid email format").nonempty("Username can't be empty").nonoptional(),
    password: z.string().nonempty("Password can't be empty").nonoptional()
})
type Credentials = z.infer<typeof LoginSchema>


export default function LoginForm(){
    const {control, handleSubmit, formState: {errors}}= useForm<Credentials>({
    resolver: zodResolver(LoginSchema)
})

const submitEvent = (data: Credentials) =>{
    console.log(data)

}
    return(<>
       <form onSubmit={handleSubmit(submitEvent)} className="flex w-full flex-col gap-5 py-5">
            <div className="flex w-full items-center">
                <label htmlFor="username" className="w-1/3 font-semibold text-lg">Username(email):</label>
            </div>
            <div className="w-2/3 flex flex-col">
            <Controller name="username" control={control} render={({field})=>{
                return(
                    <>
                    <input type="email" {...field} placeholder="Enter username"
                className={`w-full border border-gray-50 p-2 px-4 rounded-md shadow 
                ${
                    errors?.username?
                    "focus-visible:outline-red-700 text-red-700":
                    "focus-visible:outline-green-700 border-gray-300"}
                    `}
                    />
                <span className="text-sm text-red-800 font-semibold italic">
                    {errors?.username?.message}
                </span>
                    </>
                )
            }}
                />

                

            </div>
       </form>
    </>)
}