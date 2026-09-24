import type { Metadata } from "next";
import { Bricolage_Grotesque, Geist, Geist_Mono } from "next/font/google";
import "./globals.css";
import Header from "@/components/partials/Header";
import Footer from "@/components/partials/Footer";
// const geistSans = Geist({
//   variable: "--font-geist-sans",
//   subsets: ["latin"],
// });

// const geistMono = Geist_Mono({
//   variable: "--font-geist-mono",
//   subsets: ["latin"],
// });

const bricolage_sans= Bricolage_Grotesque({
  variable: "--font-custom-sans",
  subsets: ['latin']
})
export const metadata: Metadata = {
  title: "HomePage || Ecommerce",
  description: "The homepage for Ecommerce product, where you will find goods and services.",
  openGraph:{
    title: "HomePage || Ecommerce",
    description: "The homepage for Ecommerce product, where you will find goods and services.",
    type: "website",
    // image: [logourl]
  },
  twitter:{
    title: "HomePage || Ecommerce",
    description: "The homepage for Ecommerce product, where you will find goods and services.",
    card: "summary_large_image"
  }
}

export default function RootLayout({ children }: LayoutProps<"/">) {
  return (
    <html
      lang="en"
      className={`${bricolage_sans.variable} ${bricolage_sans.variable} h-full antialiased`}
    >
      <body>
      
      <Header/>
      {children}
      <Footer/>
        
      </body>
    </html>
  );
}
