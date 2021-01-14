try {

    Apex.tooltip = {
        theme: 'dark'
    }

    /*
        ==============================
        |    @Options Charts Script   |
        ==============================
    */

    /*
        =============================
            Daily Sales | Options
        =============================
    */


    /*
        =============================
            Total Orders | Options
        =============================
    */


    /*
        =================================
            Revenue Monthly | Options
        =================================
    */


    /*
        ==================================
            Sales By Category | Options
        ==================================
    */



    /*
        ==============================
        |    @Render Charts Script    |
        ==============================
    */


    /*
        ============================
            Daily Sales | Render
        ============================
    */
    var d_2C_1 = new ApexCharts(document.querySelector("#daily-sales"), d_2options1);
    d_2C_1.render();

    /*
        ============================
            Total Orders | Render
        ============================
    */
    var d_2C_2 = new ApexCharts(document.querySelector("#total-orders"), d_2options2);
    d_2C_2.render();

    /*
        ================================
            Revenue Monthly | Render
        ================================
    */
    var chart1 = new ApexCharts(
        document.querySelector("#revenueMonthly"),
        options1
    );

    chart1.render();

    /*
        =================================
            Sales By Category | Render
        =================================
    */
    var chart = new ApexCharts(
        document.querySelector("#chart-2"),
        options
    );

    chart.render();

    /*
        =============================================
            Perfect Scrollbar | Recent Activities
        =============================================
    */
    const ps = new PerfectScrollbar(document.querySelector('.mt-container'));


} catch(e) {
    console.log(e);
}