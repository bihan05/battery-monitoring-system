$(document).ready(function () {
    setInterval(() => {
        $.ajax({
            method: "GET",
            url: "http://localhost/main-project-bms/public/api/data/tp",
        })
            .done(function (getData) {
                if (typeof getData === "object" && getData !== null) {
                    let htmlContent = ""; // Initialize an empty string to store HTML content
                    const pi = 22 / 7;
                    Object.keys(getData).forEach(function (key) {
                        const item = getData[key];
                        const circumference = 2 * pi * 63;
                        const persen = item.persen;
                        const progress =
                            circumference - (persen / 100) * circumference;
                        htmlContent += `
                        <div class="bg-[#252271] card hover:shadow-2xl transition-all duration-200 ease-out">
                            <div class="flex flex-col items-center mx-10 my-7">
                                <div class="w-[150px] h-[150px] rounded-full flex items-center justify-center bg-white">
                                    <svg class="-rotate-90 w-[150px] h-[150px]">
                                        <circle style="color: #ffff;" stroke-width="10" stroke="currentColor" fill="transparent" r="63" cx="75" cy="75" />
                                        <circle style="color: #d25525;" stroke-width="12" stroke-dasharray="${circumference}" stroke-dashoffset="${progress}" stroke-linecap="round" stroke="currentColor" fill="transparent" r="63" cx="75" cy="75" />
                                    </svg>
                                    <span id="persen" class="absolute font-bold text-3xl text-[#d25525]">${item.persen}%</span>
                                </div>
                                <span id="baterai" class="mt-5 font-bold text-2xl uppercase text-center">Baterai ${item.baterai}</span>
                                <span id="tegangan" class="mt-3 font-medium text-xl text-center">${item.tegangan} VDC</span>
                                <span id="rd" class="font-medium text-xl text-center">${item.hambatan_dalam} mOhm</span>
                            </div>
                        </div>`;
                    });
                    $("#bms-data").html(htmlContent);
                    console.log("data berhasil diambil");
                } else {
                    console.log("data tidak ditemukan");
                }
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.error(
                    "Gagal mengambil data. Status:",
                    textStatus,
                    "Error:",
                    errorThrown
                );
            });
    }, 1000);
});
