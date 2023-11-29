<x-HtmlPage>
    <div class="w-screen p-2 h-screen  overflow-hidden">
        <div class="h-full w-full  overflow-hidden">
            <div class="h-full overflow-hidden  shadow-xl">
                <!-- resources/views/components/AdminLayout.blade.php -->
                <div class="flex h-full w-full">
                    <div class="hidden sm:flex w-2/12 h-full ">
                        <x-AdminNavbar />

                    </div>

                    <div
                        class="sm:w-10/12 w-12/12 sm:px-8 px-1 sm:ml-2 bg-white overflow-hidden  rounded-lg text-junggleGreen">
                        <header class="py-4 sm:py-4  place-items-center grid grid-cols-2  rounded-lg">
                            {{-- header-title --}}
                            <div class="h-full w-full   ">
                                <h1 class="font-PlayfairDisplay text-3xl sm:text-4xl text-gray-900">
                                    Category
                                </h1>
                            </div>

                            <div class="md:flex hidden justify-end items-center h-full w-full ">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-10 ">
                                <span
                                    class="self-center ml-2 PlayfairDisplay text-xl font-semibold whitespace-nowrap text-jungglegreen font-PlayfairDisplay">Ratu
                                    Boga</span>
                            </div>


                        </header>
                        <main>
                            {{-- head main --}}
                            <div class="flex items-center   sm:py-4  ">
                                <a class="font-semibold text-sm  hover:opacity-75"
                                    href="{{ url('/admin/products') }}">Product</a>
                                <a class="font-semibold text-flame text-sm pl-4 hover:opacity-75"
                                    href="{{ url('#') }}">Category</a>
                            </div>
                            {{-- content main --}}
                            <div style="height: 36rem "
                                class="grid  md:overflow-hidden  mt-2 sm:mt-0 m-0 text-junggleGreen shadow-md border-t  h-full rounded-xl   ">
                                <div
                                    class="overflow-x-hidden border-b my-2 md:h-14 h-24 md:grid flex flex-wrap  grid-flow-col md:grid-cols-2 md:gap-4">
                                    <div class="w-full h-4/6 md:h-full">
                                        <div
                                            class="Search rounded-md border hover:border-flame border-solid border-neutral-300  flex w-5/6  md:w-4/6 my-2 md:mx-6 mx-auto h-4/6  items-stretch">
                                            <input type="search"
                                                class="  block focus:ring-0 h-full  min-w-0 border-0 flex-auto bg-transparent  px-3 py-[0.25rem] text-base font-normal   outline-none transition duration-200 ease-in-out  "
                                                placeholder="Search" aria-label="Search"
                                                aria-describedby="button-addon1" />
                                            <!--Search button-->
                                            <button
                                                class="  h-full  flex items-center   px-6  text-xs font-medium   transition duration-150 ease-in-out"
                                                type="button" id="button-addon1" data-te-ripple-init
                                                data-te-ripple-color="light">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="#163A35" style="transition: fill 0.3s ease;" class="h-5 w-5"
                                                    onmouseover="this.style.fill='#E8512A'"
                                                    onmouseout="this.style.fill='#163A35'">
                                                    <path fill-rule="evenodd"
                                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                        clip-rule="evenodd" />
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                    <div class=" px-4 -mt-3 md:-mt-0 md:w-auto w-full md:m-0">
                                        <div class=" md:m-0 flex w-full md:justify-end justify-center  h-full">
                                            {{-- ///filter --}}
                                            <div class=" flex text-xs  md:my-auto my-0  h-3/6">
                                                <select id="filter"
                                                    class="block px-3 input w-24  m-auto  flex cursor-pointer focus:ring-0 font-bold  text-xs   rounded-md hover:opacity-75 transition duration-300 ease-in-out transform    text-junggleGreen text-opacity-50">
                                                    <option selected>Filter</option>
                                                    <option value="Minuman">Minuman</option>
                                                    <option value="Makanan">Makanan</option>
                                                </select>
                                                {{-- ///add menu --}}
                                                <div x-data x-on:click="$dispatch('open-modal',{name : 'AddCategory'})"
                                                    class="button-add md:m-0 m-auto mx-2  md:mx-2 cursor-pointer   justify-center  opacity-100 hover:opacity-75 transition duration-300 ease-in-out transform bg-slateGreen text-white   w-24  py-0.5   rounded-md  flex ">
                                                    <h2 class=" font-bold my-1 md:my-0. mx-1">+</h2>
                                                    <p style="font-size: 0.9em;" class="font-bold my-auto text-xs  ">
                                                        Create new</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 32rem  " class="pb-0">

                                    <div
                                        class="  lg:py-0 py-8 overflow-x-hidden lg:overflow-hidden  w-full h-full md:h-auto item-center bg-white  grid-flow-row auto-rows-auto  flex flex-wrap lg:grid lg:grid-cols-3 gap-2">
                                        {{-- ///view --}}
                                        @foreach ($data as $data)
                                            <div
                                                class=" lg:m-0 overflow-hidden  sm:h-40  w-70 sm:w-80 xl:w-96 h-36 bg-slateGreen  cursor-pointer rounded-xl m-auto   flex text-almond c-card   scale-90">
                                                <img class="rounded-full w-28 h-28 sm:w-32 sm:h-32 bg-white my-4 mx-1 sm:m-4"
                                                    src="{{ asset('images/nasgor01.png') }}" alt="gambar">
                                                <div class="text ml-1 mt-3 ">
                                                    <span class="text-xl font-bold">{{ $data->category }}</span>
                                                    <p class="break-all mt-2 text-xs">Category menu </p>

                                                    <div class="text-sm font-bold flex gap-2 mt-3">
                                                        <p>total product: </p>
                                                        <p>{{ $data->id }}</p>
                                                    </div>


                                                    <div
                                                        class="py-4 place-items-center grid grid-cols-2 gap-2 h-2/12  text-xs">
                                                        <a  href="{{ url('/edit_category', $data->id) }}"
                                                            class="button-edit opacity-100 hover:opacity-75 bg-flame text-white transition duration-300 ease-in-out transform  w-20 lg:w-24 px-3 py-1 border-solid border border-flame rounded-md  flex ">
                                                            <svg width="10" height="9"
                                                                class="m-auto mt-1 mx-0.5" viewBox="0 0 10 9"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.9573 0.420517C8.82401 0.287198 8.66576 0.181442 8.49159 0.10929C8.31742 0.0371367 8.13075 0 7.94223 0C7.75371 0 7.56703 0.0371367 7.39287 0.10929C7.2187 0.181442 7.06045 0.287198 6.92716 0.420517L1.3812 5.96671C1.24561 6.1024 1.14343 6.26775 1.08271 6.4497L0.397246 8.50693C0.375349 8.57294 0.37224 8.64374 0.388267 8.71142C0.404294 8.7791 0.438826 8.84099 0.488003 8.89017C0.53718 8.93934 0.599064 8.97388 0.666739 8.98991C0.734414 9.00593 0.805212 9.00282 0.871222 8.98093L2.92836 8.29543C3.1106 8.23543 3.2756 8.13269 3.41134 7.99694L8.9573 2.4515C9.09072 2.31818 9.19657 2.15988 9.26879 1.98564C9.341 1.81139 9.37817 1.62462 9.37817 1.43601C9.37817 1.24739 9.341 1.06062 9.26879 0.886377C9.19657 0.712133 9.09072 0.553831 8.9573 0.420517ZM7.45738 0.951511C7.52072 0.886592 7.59632 0.83489 7.67979 0.799401C7.76326 0.763913 7.85295 0.745344 7.94365 0.74477C8.03434 0.744197 8.12426 0.76163 8.20817 0.79606C8.29208 0.83049 8.36833 0.881232 8.43249 0.945345C8.49665 1.00946 8.54745 1.08567 8.58194 1.16956C8.61643 1.25345 8.63394 1.34335 8.63343 1.43405C8.63293 1.52476 8.61443 1.61446 8.57901 1.69796C8.54359 1.78146 8.49194 1.8571 8.42708 1.9205L7.87736 2.471L6.90766 1.50126L7.45813 0.951511H7.45738ZM6.37743 2.0315L7.34638 3.00124L2.88112 7.46669C2.82779 7.51987 2.76283 7.55992 2.69138 7.58369L1.34595 8.03219L1.79442 6.68745C1.81811 6.61573 1.85817 6.55051 1.91142 6.49695L6.37743 2.0315Z"
                                                                    fill="white" />
                                                            </svg>
                                                            <p style="font-size: 0.9em;"
                                                                class=" m-auto text-xs font-semibold ">
                                                                Edit</p>
                                                        </a>

                                                        <a href="{{ url('/destroy', $data->id) }}"
                                                            onclick="showConfirmationModal(event)" x-data
                                                            x-on:click="$dispatch('open-modal',{name : 'delete'})"
                                                            class="button-delete opacity-100 hover:opacity-75 bg-transparent hover:bg-flame transition duration-300 ease-in-out transform text-flame hover:text-white w-20 lg:w-24 mr-2 lg:mr-0 px-5 py-1 flex  border-solid border border-flame rounded-md  ">

                                                            <svg width="12" height="11" class="my-auto  mx-0.5"
                                                                viewBox="0 0 12 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.96151 2.29167H6.79484C6.79484 2.04855 6.69826 1.81539 6.52636 1.64349C6.35445 1.47158 6.12129 1.375 5.87817 1.375C5.63506 1.375 5.4019 1.47158 5.22999 1.64349C5.05809 1.81539 4.96151 2.04855 4.96151 2.29167ZM4.27401 2.29167C4.27401 2.081 4.3155 1.87241 4.39612 1.67778C4.47673 1.48315 4.5949 1.30631 4.74386 1.15735C4.89282 1.00839 5.06966 0.890227 5.26429 0.80961C5.45891 0.728993 5.66751 0.6875 5.87817 0.6875C6.08884 0.6875 6.29744 0.728993 6.49206 0.80961C6.68669 0.890227 6.86353 1.00839 7.01249 1.15735C7.16145 1.30631 7.27961 1.48315 7.36023 1.67778C7.44085 1.87241 7.48234 2.081 7.48234 2.29167H10.1178C10.2089 2.29167 10.2964 2.32788 10.3608 2.39235C10.4253 2.45681 10.4615 2.54425 10.4615 2.63542C10.4615 2.72658 10.4253 2.81402 10.3608 2.87848C10.2964 2.94295 10.2089 2.97917 10.1178 2.97917H9.51276L8.97651 8.53004C8.93537 8.95537 8.73728 9.35011 8.42086 9.6373C8.10444 9.92448 7.6924 10.0835 7.26509 10.0833H4.49126C4.06403 10.0834 3.6521 9.92431 3.33578 9.63714C3.01946 9.34997 2.82143 8.95529 2.7803 8.53004L2.24359 2.97917H1.63859C1.54742 2.97917 1.45999 2.94295 1.39552 2.87848C1.33106 2.81402 1.29484 2.72658 1.29484 2.63542C1.29484 2.54425 1.33106 2.45681 1.39552 2.39235C1.45999 2.32788 1.54742 2.29167 1.63859 2.29167H4.27401ZM5.19068 4.46875C5.19068 4.37758 5.15446 4.29015 5.08999 4.22568C5.02553 4.16122 4.93809 4.125 4.84693 4.125C4.75576 4.125 4.66832 4.16122 4.60386 4.22568C4.53939 4.29015 4.50318 4.37758 4.50318 4.46875V7.90625C4.50318 7.99742 4.53939 8.08485 4.60386 8.14932C4.66832 8.21378 4.75576 8.25 4.84693 8.25C4.93809 8.25 5.02553 8.21378 5.08999 8.14932C5.15446 8.08485 5.19068 7.99742 5.19068 7.90625V4.46875ZM6.90942 4.125C7.00059 4.125 7.08803 4.16122 7.15249 4.22568C7.21696 4.29015 7.25317 4.37758 7.25317 4.46875V7.90625C7.25317 7.99742 7.21696 8.08485 7.15249 8.14932C7.08803 8.21378 7.00059 8.25 6.90942 8.25C6.81826 8.25 6.73082 8.21378 6.66636 8.14932C6.60189 8.08485 6.56567 7.99742 6.56567 7.90625V4.46875C6.56567 4.37758 6.60189 4.29015 6.66636 4.22568C6.73082 4.16122 6.81826 4.125 6.90942 4.125ZM3.46459 8.46404C3.48931 8.71917 3.60816 8.95595 3.79797 9.12822C3.98778 9.30048 4.23493 9.39589 4.49126 9.39583H7.26509C7.52142 9.39589 7.76857 9.30048 7.95838 9.12822C8.14819 8.95595 8.26704 8.71917 8.29176 8.46404L8.82251 2.97917H2.93384L3.46459 8.46404Z"
                                                                    fill="#FF2C56" />
                                                            </svg>
                                                            <p style="font-size: 0.9em;"
                                                                class=" my-auto text-xs font-normal ">
                                                                Delete</p>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                            </div>
                            {{-- //Pagination --}}
                            <div class="bg-transparent md:px-6 px-0 sm:mt-16 md:mt-0  mt-14 md:my-2 my-8 md:h-14 h-8  ">
                                <div class="h-full grid grid-flow-col grid-cols-2 gap-4">
                                    <div class="w-full h-full flex items-center ">
                                        <h4 style="color: #94A3B8;" class="text-xs font-normal">Halaman 1 dari 5
                                        </h4>
                                    </div>

                                    <div class="">
                                        <div class="my-auto flex w-full justify-end h-full">
                                            <div class=" flex text-xs my-auto  h-3/6">
                                                <div class="flex items-center justify-center">
                                                    <div class="py-2.5 border rounded-md ">
                                                        <ol class="flex items-center text-sm ">
                                                            <li>
                                                                <button type="button"
                                                                    class="relative flex items-center justify-center font-medium min-w-[2rem] px-1.5 h-8 -my-3 rounded-md  hover:bg-gray-500/5   transition "
                                                                    aria-label="Previous" rel="prev">
                                                                    <svg width="26" height="24"
                                                                        viewBox="0 0 26 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M13.5537 18.219C13.6247 18.2888 13.681 18.3715 13.7195 18.4627C13.7579 18.5538 13.7777 18.6514 13.7777 18.75C13.7777 18.8486 13.7579 18.9463 13.7195 19.0374C13.681 19.1285 13.6247 19.2113 13.5537 19.281C13.4826 19.3508 13.3983 19.4061 13.3055 19.4438C13.2128 19.4816 13.1133 19.501 13.0129 19.501C12.9124 19.501 12.813 19.4816 12.7202 19.4438C12.6274 19.4061 12.5431 19.3508 12.4721 19.281L5.59746 12.531C5.52633 12.4614 5.46989 12.3786 5.43139 12.2875C5.39288 12.1964 5.37306 12.0987 5.37306 12C5.37306 11.9014 5.39288 11.8037 5.43139 11.7126C5.46989 11.6215 5.52633 11.5387 5.59746 11.469L12.4721 4.71903C12.6155 4.5782 12.81 4.49908 13.0129 4.49908C13.2157 4.49908 13.4102 4.5782 13.5537 4.71903C13.6971 4.85986 13.7777 5.05087 13.7777 5.25003C13.7777 5.44919 13.6971 5.6402 13.5537 5.78103L7.21834 12L13.5537 18.219ZM19.6644 18.219C19.7354 18.2888 19.7918 18.3715 19.8302 18.4627C19.8686 18.5538 19.8884 18.6514 19.8884 18.75C19.8884 18.8486 19.8686 18.9463 19.8302 19.0374C19.7918 19.1285 19.7354 19.2113 19.6644 19.281C19.5934 19.3508 19.5091 19.4061 19.4163 19.4438C19.3235 19.4816 19.2241 19.501 19.1236 19.501C19.0232 19.501 18.9237 19.4816 18.8309 19.4438C18.7381 19.4061 18.6538 19.3508 18.5828 19.281L11.7082 12.531C11.6371 12.4614 11.5806 12.3786 11.5421 12.2875C11.5036 12.1964 11.4838 12.0987 11.4838 12C11.4838 11.9014 11.5036 11.8037 11.5421 11.7126C11.5806 11.6215 11.6371 11.5387 11.7082 11.469L18.5828 4.71903C18.6538 4.6493 18.7381 4.59398 18.8309 4.55624C18.9237 4.51851 19.0232 4.49908 19.1236 4.49908C19.2241 4.49908 19.3235 4.51851 19.4163 4.55624C19.5091 4.59398 19.5934 4.6493 19.6644 4.71903C19.7354 4.78876 19.7918 4.87154 19.8302 4.96265C19.8686 5.05376 19.8884 5.15141 19.8884 5.25003C19.8884 5.34865 19.8686 5.4463 19.8302 5.53741C19.7918 5.62851 19.7354 5.7113 19.6644 5.78103L13.3291 12L19.6644 18.219Z"
                                                                            fill="#94A3B8" />
                                                                    </svg>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button"
                                                                    class="relative flex border-l  items-center justify-center font-medium min-w-[2rem] px-1.5 h-8 -my-3   hover:bg-gray-500/5 transition "
                                                                    aria-label="Previous" rel="prev">
                                                                    <svg width="19" height="17"
                                                                        viewBox="0 0 19 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10.0065 2.61164C10.138 2.47506 10.2088 2.29281 10.2033 2.10498C10.1979 1.91715 10.1167 1.73912 9.97765 1.61006C9.83856 1.48099 9.65294 1.41147 9.46164 1.41679C9.27034 1.4221 9.08902 1.50181 8.95758 1.63839L2.82561 8.01339C2.69898 8.1449 2.62842 8.31903 2.62842 8.50001C2.62842 8.681 2.69898 8.85512 2.82561 8.98664L8.95758 15.3623C9.02224 15.4315 9.10023 15.4873 9.18704 15.5265C9.27384 15.5658 9.36772 15.5877 9.46324 15.591C9.55875 15.5944 9.65398 15.579 9.7434 15.5459C9.83283 15.5128 9.91466 15.4626 9.98414 15.3982C10.0536 15.3337 10.1094 15.2564 10.1482 15.1706C10.187 15.0849 10.208 14.9924 10.2101 14.8986C10.2122 14.8048 10.1952 14.7115 10.1603 14.6241C10.1253 14.5368 10.0731 14.4571 10.0065 14.3898L4.34201 8.50001L10.0065 2.61164Z"
                                                                            fill="#94A3B8" />
                                                                    </svg>
                                                                </button>
                                                            </li>

                                                            <li>
                                                                <button type="button"
                                                                    class="relative border-l flex items-center text-junggleGreen justify-center font-medium min-w-[2rem] px-1.5 h-8 -my-3   ">
                                                                    <span>1</span>
                                                                </button>
                                                            </li>

                                                            <li>
                                                                <button type="button"
                                                                    class="relative flex items-center border-l justify-center font-medium min-w-[2rem] px-1.5 h-8 -my-3  outline-none hover:bg-gray-500/5  dark:hover:bg-gray-400/5 transition "
                                                                    aria-label="Next" rel="next">
                                                                    <svg width="18" height="17"
                                                                        viewBox="0 0 18 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.48958 14.3884C8.35814 14.5249 8.28734 14.7072 8.29275 14.895C8.29816 15.0829 8.37934 15.2609 8.51844 15.3899C8.65754 15.519 8.84315 15.5885 9.03445 15.5832C9.22575 15.5779 9.40707 15.4982 9.53851 15.3616L15.6705 8.98661C15.7971 8.8551 15.8677 8.68097 15.8677 8.49999C15.8677 8.319 15.7971 8.14488 15.6705 8.01336L9.53851 1.63765C9.47386 1.56855 9.39586 1.51274 9.30906 1.47348C9.22225 1.43423 9.12837 1.41229 9.03286 1.40896C8.93735 1.40563 8.84211 1.42097 8.75269 1.45408C8.66327 1.48719 8.58144 1.53741 8.51195 1.60184C8.44246 1.66627 8.38671 1.74361 8.34792 1.82937C8.30913 1.91513 8.28809 2.00761 8.28601 2.10143C8.28393 2.19524 8.30085 2.28853 8.3358 2.37587C8.37075 2.46321 8.42302 2.54286 8.48958 2.61019L14.1541 8.49999L8.48958 14.3884Z"
                                                                            fill="#94A3B8" />
                                                                    </svg>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button"
                                                                    class="relative flex border-l items-center justify-center font-medium min-w-[2rem] px-1.5 h-8 -my-3 outline-none hover:bg-gray-500/5   dark:hover:bg-gray-400/5 transition"
                                                                    aria-label="Next" rel="next">
                                                                    <svg width="25" height="24"
                                                                        viewBox="0 0 25 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.9424 5.78097C11.8714 5.71124 11.8151 5.62846 11.7766 5.53735C11.7382 5.44624 11.7184 5.34859 11.7184 5.24997C11.7184 5.15135 11.7382 5.0537 11.7766 4.9626C11.8151 4.87149 11.8714 4.7887 11.9424 4.71897C12.0134 4.64924 12.0978 4.59392 12.1905 4.55619C12.2833 4.51845 12.3828 4.49902 12.4832 4.49902C12.5837 4.49902 12.6831 4.51845 12.7759 4.55619C12.8687 4.59392 12.953 4.64924 13.024 4.71897L19.8986 11.469C19.9698 11.5386 20.0262 11.6214 20.0647 11.7125C20.1032 11.8036 20.123 11.9013 20.123 12C20.123 12.0986 20.1032 12.1963 20.0647 12.2874C20.0262 12.3785 19.9698 12.4613 19.8986 12.531L13.024 19.281C12.8806 19.4218 12.6861 19.5009 12.4832 19.5009C12.2804 19.5009 12.0859 19.4218 11.9424 19.281C11.799 19.1401 11.7184 18.9491 11.7184 18.75C11.7184 18.5508 11.799 18.3598 11.9424 18.219L18.2778 12L11.9424 5.78097ZM5.83167 5.78097C5.76065 5.71124 5.70432 5.62846 5.66588 5.53735C5.62745 5.44624 5.60767 5.34859 5.60767 5.24997C5.60767 5.15135 5.62745 5.0537 5.66588 4.9626C5.70432 4.87149 5.76065 4.7887 5.83167 4.71897C5.90269 4.64924 5.987 4.59392 6.0798 4.55619C6.17259 4.51845 6.27204 4.49902 6.37248 4.49902C6.47291 4.49902 6.57236 4.51845 6.66516 4.55619C6.75795 4.59392 6.84226 4.64924 6.91328 4.71897L13.7879 11.469C13.859 11.5386 13.9154 11.6214 13.954 11.7125C13.9925 11.8036 14.0123 11.9013 14.0123 12C14.0123 12.0986 13.9925 12.1963 13.954 12.2874C13.9154 12.3785 13.859 12.4613 13.7879 12.531L6.91328 19.281C6.84226 19.3507 6.75795 19.406 6.66516 19.4438C6.57236 19.4815 6.47291 19.5009 6.37248 19.5009C6.27204 19.5009 6.17259 19.4815 6.0798 19.4438C5.987 19.406 5.90269 19.3507 5.83167 19.281C5.76065 19.2112 5.70432 19.1285 5.66588 19.0373C5.62745 18.9462 5.60767 18.8486 5.60767 18.75C5.60767 18.6514 5.62745 18.5537 5.66588 18.4626C5.70432 18.3715 5.76065 18.2887 5.83167 18.219L12.167 12L5.83167 5.78097Z"
                                                                            fill="#94A3B8" />
                                                                    </svg>
                                                                </button>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>


                    </div>
                    <!-- modal-add-category -->
                    {{-- //modal add --}}
                    <x-modal-ratu-boga name="AddCategory" title="AddCategory">
                        @slot('colorAlertModal')
                            bg-slateGreen
                        @endslot
                        @slot('modalConten')
                            <x-add-category :data="$data"></x-add-category>
                        @endslot

                    </x-modal-ratu-boga>
                    {{-- ////delete modal --}}
                    <x-modal-ratu-boga id="confirmationModal" name="delete" title="Warning">
                        @slot('colorAlertModal')
                            bg-warning
                        @endslot
                        @slot('modalConten')
                            <x-delete-modal>
                                @slot('item')
                                @endslot
                            </x-delete-modal>
                        @endslot
                    </x-modal-ratu-boga>
                    @if (session()->has('success'))
                        <x-alert>
                            @slot('colorAlert')
                                bg-success
                            @endslot
                            @slot('AlertConten')
                                <h3 class="font-bold -mt-8 text-2xl">Nice!</h3>
                                {{ session()->get('success') }}
                            @endslot
                        </x-alert>
                    @endif
                    @if (session()->has('failure'))
                        <x-alert>
                            @slot('colorAlert')
                                bg-flame
                            @endslot
                            @slot('AlertConten')
                                <h3 class="font-bold -mt-8 text-xl">Oops! An Error Occurred</h3>
                                {{ session()->get('failure') }}
                            @endslot
                        </x-alert>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-HtmlPage>
