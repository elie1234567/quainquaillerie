<x-app-layout>

    <main class="main-content max-height-vh-100 h-100">
        <!-- <div class="pt-5 pb-6 bg-cover" style="background-image: url('../assets/img/header-blue-purple.jpg')"></div> -->
        <div class="container my-3 py-3">
            <div class="row mt-n6 mb-6">
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                                    <path fill-rule="evenodd"
                                        d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z"
                                        clip-rule="evenodd" />
                                    <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">achat prix annuels</p>
                            <h3 class="mb-0 font-weight-bold"> {{ $pay }} ariary</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor"">
                                    <path
                                        d=" M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                                    <path
                                        d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">Payment annuels</p>
                            <h3 class="mb-0 font-weight-bold">{{ $paye }} ariary</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">ADMIN</p>
                            <h3 class="mb-0 font-weight-bold">{{ $admin }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">utilisateur</p>
                            <h3 class="mb-0 font-weight-bold">{{ $User }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                                    <path fill-rule="evenodd"
                                        d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">prix annuels</p>
                            <h3 class="mb-0 font-weight-bold">{{ $historique }} ariary</h3>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal mb-4 dark">
            <h1>achat statistique</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-xs border">
                        <div class="card-header pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                           
               <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <style>
                .chart {
                width: 20px;
                height: 20px;
                }

                </style>
               
         <canvas id="myChart" class="chart"></canvas>
             <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json(array_keys($dataByDate)),
                datasets: [{
                    label: 'Total par date',
                    data: @json(array_values($dataByDate)),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
            </div>
        </div>
      </div>
</div>

<hr class="horizontal mb-4 dark">
            <h1>payment statistique</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-xs border">
                        <div class="card-header pb-0">
                            <div class="d-sm-flex align-items-center mb-3">
                           
               <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <style>
                .chart {
                width: 20px;
                height: 20px;
                }

                </style>
               
         <canvas id="myChar" class="chart"></canvas>
             <script>
        var ctx = document.getElementById('myChar').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json(array_keys($dataByDat)),
                datasets: [{
                    label: 'Total par date',
                    data: @json(array_values($dataByDat)),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
            </div>
        </div>
      </div>

    </main>

</x-app-layout>
