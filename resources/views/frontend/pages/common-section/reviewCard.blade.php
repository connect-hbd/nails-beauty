 <div
     class="group relative flex h-full flex-col rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:border-brand-200 hover:shadow-xl">



     <div class="mb-2 text-xs tracking-wide text-amber-400">
         ★★★★★
     </div>

     <p class="line-clamp-3 text-xs leading-5 text-slate-600">
         {{ $review['text'] }}
     </p>

     <div class="mt-3 flex items-center justify-between border-t border-slate-100 pt-3">

         <div class="flex items-center gap-3">

             <div
                 class="{{ $review['color'] }} flex h-10 w-10 items-center justify-center rounded-full text-xs font-bold text-white shadow-sm">

                 {{ $review['initial'] }}

             </div>

             <div class="flex flex-col gap-1">
                 <h5 class="text-sm font-bold text-slate-800">
                     {{ $review['name'] }}
                 </h5>

                 <span class="text-[10px] text-slate-400">
                     7 months ago
                 </span>
             </div>

         </div>

     </div>

 </div>
