import {Metadata} from "next";
import LoginForm from "@/components/auth/LoginForm";


export const metadata: Metadata = {
    title: "Login|Ecommerce",
    description:"Ecommerce platform,where after login you will get all the access to the features"
}
export default function LoginPage(){
    return(<>
        <section className="w-5xl mx-auto py-10">
            <div className="w-full flex flex-col bg-primary-50 rounded-lg shadow p-10">
                <div className="border-b pb-5 border-gray-500">
                    <h1 className="text-4xl font-semibold text-primary-900 text-shadow-lg">
                    Login From Here
                    </h1>
                </div>
                <LoginForm/>
            </div>
            
        </section>
    </>)
}