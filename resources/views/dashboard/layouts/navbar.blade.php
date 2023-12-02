<nav class="py-4 px-6 w-[calc(100%-256px)]  justify-between ml-64 bg-white flex items-center shadow-lg shadow-black/5">
      <div class=" py-4 flex justify-between relative">
         <ul class="flex items-centertext-sm ml-4">
            <li class="mr-2 ">
               <span class="text-black font-semibold text-3xl font-poppins"> Dashboard</span>
            </li>
         </ul>

      </div>
         
      
      <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" 
            class="text-gray-60 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none 
            focus:ring-white font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
            type="button"><svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
            </svg><span class="font-poppins text-black font-bold text-2xl mt-1 ml-2"> Admin </span>
         </button>
   
   <!-- Dropdown menu -->
   <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
       <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
         <li>
           <span class=" font-poppins p-4 text-lg  font-semibold"> username</span>
         </li>
         <li>
           <span class="font-poppins flex items-center p-4 text-base border-b border-b-black py-2">@Email</span>
         </li>
         <li>
           <a href="#" class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex">
            <svg class="w-5 h-5 mt-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
              </svg><span class=" ml-2 font-poppins text-xl">Logout</span>
           </a>
         </li>
       </ul>
   </div> 
      
   </nav>

{{--  End navbar --}}