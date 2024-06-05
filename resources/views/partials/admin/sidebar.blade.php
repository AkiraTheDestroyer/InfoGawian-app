<div id="sidebar" class="hidden bg-teal-50 w-5/6 h-screen fixed top-0 overflow-y-visible transition-transform">
    <div class="flex flex-row justify-between p-4 text-black text-xl">
        <div>
            <h5 class="font-mono font-medium">InfoGawian.</h5>
        </div>
        <div>
            <button type="button" onclick="closeSidebar()" class="bg-teal-100 text-teal-500 px-2 rounded-full">X</button>
        </div>
    </div>
    <hr>
    <div class="w-full p-3 flex flex-col gap-4">
        <div class="flex flex-row items-center bg-teal-500 gap-3 p-6 w-full rounded-lg">
            <div class="w-12">
                <img src="https://soccerpointeclaire.com/wp-content/uploads/2021/06/default-profile-pic-e1513291410505.jpg" alt="" class="w-10 h-10 rounded-full ">
            </div>
            <div class="w-full flex flex-col text-teal-50">
                <p class="flex flex-row justify-between">
                    <span>Antony123</span>
                </p>
                <hr class="w-">
                <p>Admin</p>
            </div>
        </div>
        <p class="text-slate-400 font-bold">General</p>
        <div class="flex flex-col justify-center bg-teal-500 p-4 w-full rounded-lg ">
            <ul class="flex flex-col gap-3 w-full">
                <li class=""><a href="/admin/dashboard" class="{{ $active == 'dashboard' ? 'underline' : ''}} text-black bg-teal-50 w-full flex items-center gap-2 flex-grow p-2 rounded-lg hover:bg-slate-500 hover:duration-150"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
                <li><a href="/admin/dashboard/users" class="{{ $active == 'users' ? 'underline' : ''}} text-black bg-teal-50 w-full flex items-center gap-2 flex-grow p-2 rounded-lg hover:bg-slate-500 hover:duration-150"><i class="fa-solid fa-user"></i> Users</a></li>
                <li><a href="/admin/dashboard/company" class="{{ $active == 'users' ? 'underline' : ''}} text-black bg-teal-50 w-full flex items-center gap-2 flex-grow p-2 rounded-lg hover:bg-slate-500 hover:duration-150"><i class="fa-solid fa-building"></i> Company</a></li>
            </ul>
        </div>
    </div>
    <div class="p-4 flex flex-col justify-end">
        <a href="/signout" class="outline outline-teal-500 py-2 text-teal-500 w-full rounded-lg font-medium justify-center flex hover:outline-red-500 hover:text-red-500 hover:duration-150">Sign Out</a> 
    </div>
</div>