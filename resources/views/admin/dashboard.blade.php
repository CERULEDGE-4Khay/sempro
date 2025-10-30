@extends('layouts.admin')

@section('content')
  <div class="flex flex-wrap -mx-3">
    <!-- card1 -->
    <div
      class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p
                  class="mb-0 font-sans text-sm font-semibold leading-normal">
                  Total anak magang
                </p>
                <h5 class="mb-0 font-bold">
                  20
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div
                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <i
                  class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card2 -->
    <div
      class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p
                  class="mb-0 font-sans text-sm font-semibold leading-normal">
                  Total absensi masuk
                </p>
                <h5 class="mb-0 font-bold">
                  10
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div
                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <i
                  class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card3 -->
    <div
      class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p
                  class="mb-0 font-sans text-sm font-semibold leading-normal">
                  Total tidak masuk
                </p>
                <h5 class="mb-0 font-bold">
                  10
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div
                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <i
                  class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card4 -->
    <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p
                  class="mb-0 font-sans text-sm font-semibold leading-normal">
                  Total keluar
                </p>
                <h5 class="mb-0 font-bold">
                  10
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div
                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                <i
                  class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- cards row 4 -->
  <div class="flex flex-wrap my-6 -mx-3">
    <div
      class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0">
      <div
        class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">

        {{-- Judul Tabel --}}
        <div
          class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <div class="flex flex-wrap mt-0 -mx-3">
            <div
              class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
              <h6>Daftar anak magang</h6>
              <p class="mb-0 text-sm leading-normal">
                <i class="fa fa-check text-cyan-500"></i>
                <span class="ml-1 font-semibold">20 active</span>
              </p>
            </div>
            <div
              class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
              <div class="relative pr-6 lg:float-right">
                <a
                  dropdown-trigger
                  class="cursor-pointer"
                  aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-slate-400"></i>
                </a>
                <p class="hidden transform-dropdown-show"></p>

                <ul
                  dropdown-menu
                  class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                  <li class="relative">
                    <a
                      class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                      href="javascript:;"
                      >Action</a
                    >
                  </li>
                  <li class="relative">
                    <a
                      class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                      href="javascript:;"
                      >Another action</a
                    >
                  </li>
                  <li class="relative">
                    <a
                      class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                      href="javascript:;"
                      >Something else here</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        {{-- Akhir judul tabel --}}

        <div class="flex-auto p-6 px-0 pb-2">
          <div class="overflow-x-auto">
            <table
              class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th
                    class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                    Nama
                  </th>
                  <th
                    class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                    Departmen
                  </th>
                  <th
                    class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                    Periode
                  </th>
                  <th
                    class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                    Status
                  </th>
                  <th
                    class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td
                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex px-2 py-1">
                      {{-- SEMISAL INGIN ADA PROFILE IMAGE --}}
                      {{-- <div>
                        <img
                          src="./assets/img/small-logos/logo-xd.svg"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                          alt="xd" />
                      </div> --}}
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">
                          Jonathan
                        </h6>
                      </div>
                    </div>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="text-xs font-semibold leading-tight">
                      Front Office
                    </span>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="text-xs font-semibold leading-tight">
                      2 Bulan
                    </span>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">
                      Active
                    </span>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                      Detail
                    </span>
                  </td>
                </tr>
                
                <tr>
                  <td
                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                    <div class="flex px-2 py-1">
                      {{-- SEMISAL INGIN ADA PROFILE IMAGE --}}
                      {{-- <div>
                        <img
                          src="./assets/img/small-logos/logo-xd.svg"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                          alt="xd" />
                      </div> --}}
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">
                          Jonathan
                        </h6>
                      </div>
                    </div>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="text-xs font-semibold leading-tight">
                      Front Office
                    </span>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="text-xs font-semibold leading-tight">
                      2 Bulan
                    </span>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">
                      Non Active
                    </span>
                  </td>
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                    <span class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                      Detail
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection