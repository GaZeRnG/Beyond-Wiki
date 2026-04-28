<?php 
    if(!defined('BEYOND_WIKI')) define('BEYOND_WIKI', true);
?>

<section id="loading-screen" class="loading-screen">
    <div class="logo-container">
        <!-- svg -->
        <!-- <svg viewBox="0 0 304 112" class="line-svg">
            <g stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path class="line" d="M59 90V56.136C58.66 46.48 51.225 39 42 39c-9.389 0-17 7.611-17 17s7.611 17 17 17h8.5v17H42C23.222 90 8 74.778 8 56s15.222-34 34-34c18.61 0 33.433 14.994 34 33.875V90H59z"/>
                <polyline class="line" points="59 22.035 59 90 76 90 76 22 59 22"/>
                <path class="line" d="M59 90V55.74C59.567 36.993 74.39 22 93 22c18.778 0 34 15.222 34 34v34h-17V56c0-9.389-7.611-17-17-17-9.225 0-16.66 7.48-17 17.136V90H59z"/>
                <polyline class="line" points="127 22.055 127 90 144 90 144 22 127 22"/>
                <path class="line" d="M127 90V55.74C127.567 36.993 142.39 22 161 22c18.778 0 34 15.222 34 34v34h-17V56c0-9.389-7.611-17-17-17-9.225 0-16.66 7.48-17 17.136V90h-17z"/>
                <path class="line" d="M118.5 22a8.5 8.5 0 1 1-8.477 9.067v-1.134c.283-4.42 3.966-7.933 8.477-7.933z"/>
                <path class="line" d="M144 73c-9.389 0-17-7.611-17-17v-8.5h-17V56c0 18.778 15.222 34 34 34V73z"/>
                <path class="line" d="M178 90V55.74C178.567 36.993 193.39 22 212 22c18.778 0 34 15.222 34 34v34h-17V56c0-9.389-7.611-17-17-17-9.225 0-16.66 7.48-17 17.136V90h-17z"/>
                <path class="line" d="M263 73c-9.389 0-17-7.611-17-17s7.611-17 17-17c9.18 0 16.58 7.4 17 17h-17v17h34V55.875C296.433 36.994 281.61 22 263 22c-18.778 0-34 15.222-34 34s15.222 34 34 34V73z"/>
                <path class="line" d="M288.477 73A8.5 8.5 0 1 1 280 82.067v-1.134c.295-4.42 3.967-7.933 8.477-7.933z"/>
            </g>
        </svg> -->
        <svg class="logo-svg" viewBox="0.00 0.00 4096.00 1650.00" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke-linecap="round" id="B">
            <path class="line" d="M709.50,52.50 L681.56,317.21 L681.00,322.50 L606.80,322.50 L601.50,322.50 L595.50,388.50 L678.00,390.00 L639.29,744.33 L639.00,747.00 L714.00,955.50 L157.19,955.50 L154.50,955.50 L54.00,744.00 L54.79,738.66 L156.00,55.50 L158.69,55.49 L709.50,52.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M375.00,189.00 L374.70,191.61 L360.00,319.50 L438.00,321.00 L438.72,315.72 L456.00,189.00 L375.00,189.00 Z" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M340.50,463.50 L340.21,466.12 L325.50,600.00 L405.00,600.00 L405.63,594.69 L421.50,462.00 L340.50,463.50 Z" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M237.00,816.00 L209.00,748.80 L207.00,744.00 L238.50,538.50 L84.37,539.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M595.50,262.50 L446.28,260.29" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M54.00,744.00 L639.00,747.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M722.91,749.60 L1302.00,748.50 L1341.00,957.00 L798.87,955.51 L793.50,955.50 L721.50,745.50 L790.50,57.00 L1342.50,54.00 L1335.30,182.16 L1335.00,187.50 L1019.35,188.97 L1014.00,189.00 L1005.00,321.00 L1324.50,322.50 L1318.73,453.75 L1318.50,459.00 L998.33,460.47 L993.00,460.50 L982.50,601.50 L1312.50,600.00 L1302.00,748.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M771.97,241.90 L838.50,243.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M737.45,586.29 L835.50,586.50 L819.01,749.42 L819.70,751.95 L853.50,876.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1215.00,600.44 L1212.00,657.00 L1209.30,657.00 L1131.00,657.00 L1130.79,659.55 L1123.51,748.84 L1124.14,751.31 L1140.00,813.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1659.00,54.00 L1653.00,253.50 L1727.20,253.50 L1732.50,253.50 L1738.34,57.79 L1738.50,52.50 L1974.00,51.00 L1969.57,384.62 L1969.50,390.00 L1815.80,391.45 L1810.50,391.50 L1806.07,740.14 L1806.00,745.50 L1818.00,957.00 L1587.85,955.53 L1582.50,955.50 L1551.79,750.75 L1551.00,745.50 L1566.00,391.50 L1402.50,390.00 L1420.50,52.50 L1423.15,52.52 L1659.00,54.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1736.44,121.44 L1973.06,121.55" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1409.13,265.61 L1560.00,265.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1569.22,866.97 L1642.50,868.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1699.50,810.00 L1692.62,752.25 L1692.00,747.00 L1696.50,655.50 L1807.12,657.07" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1551.00,745.50 L1806.00,745.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2607.00,52.50 L2607.11,55.19 L2636.76,740.13 L2637.00,745.50 L2606.28,950.25 L2605.50,955.50 L2052.00,954.00 L2053.50,747.00 L2052.00,57.00 L2054.69,56.98 L2607.00,52.50 Z" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2373.00,189.00 L2373.05,191.67 L2380.50,600.00 L2302.50,600.00 L2296.50,189.00 L2373.00,189.00 Z" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2053.50,747.00 L2637.00,745.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2053.30,654.01 L2206.50,654.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2207.99,746.60 L2206.50,654.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2203.50,810.00 L2207.99,746.60" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2379.02,519.05 L2627.18,518.76" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2302.44,54.97 L2307.00,189.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3090.26,172.74 L3329.48,173.62" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2860.50,165.00 L2932.92,164.54" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2709.02,535.50 L2944.50,535.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2970.00,739.50 L2946.00,391.50 L3027.00,391.50 L3027.46,396.86 L3039.00,531.00 L3044.30,531.00 L3118.50,531.00 L3118.95,536.25 L3136.50,741.00 L3135.11,746.19 L3079.50,954.00 L3319.50,955.50 L3321.07,950.45 L3384.00,748.50 L3383.49,743.15 L3318.00,52.50 L3312.70,52.47 L3079.50,51.00 L3103.50,322.50 L3025.50,321.00 L3025.03,315.69 L3013.50,183.00 L3008.20,183.00 L2934.00,183.00 L2933.68,177.62 L2926.50,54.00 L2921.13,54.00 L2685.00,54.00 L2719.50,745.50 L2682.00,952.50 L2917.50,955.50 L2918.77,950.32 L2968.50,748.50 L2728.50,748.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3383.49,743.15 L3135.11,746.19" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2811.00,673.50 L2815.50,738.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2790.00,876.00 L2815.50,748.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3264.00,813.00 L3287.96,744.32" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3289.50,735.00 L3268.50,538.50 L3129.00,540.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3880.50,117.00 L3883.15,117.10 L3954.70,119.80 L3960.00,120.00 L4042.50,675.00 L3958.50,675.00 L3969.64,743.25 L3970.50,748.50 L3869.35,952.26 L3867.00,957.00 L3394.50,954.00 L3464.78,749.00 L3466.50,744.00 L3397.50,54.00 L3873.00,54.00 L3873.31,56.62 L3880.50,117.00 Z" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3730.50,189.00 L3730.84,191.67 L3783.00,600.00 L3702.00,600.00 L3655.50,187.50 L3730.50,189.00 Z" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3588.00,238.50 L3661.15,237.69" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3746.06,310.81 L3898.50,310.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3594.00,813.00 L3617.67,748.93 L3619.50,744.00 L3601.50,585.00 L3699.90,581.39" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3466.50,744.00 L3970.50,748.50" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M3905.90,12.46 L3055.50,10.50 L3024.00,141.00 L2967.00,142.50 L2966.86,139.81 L2959.50,-3.00" fill="none" stroke="currentColor" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2960.08,8.27 L126.00,9.00 L125.18,14.32 L10.50,759.00 L12.87,763.77 L129.00,997.50 L134.39,997.50 L1374.00,997.50 L1374.46,992.12 L1390.50,804.00 L1389.00,799.06 L1365.00,720.00 L1392.00,720.00 L1392.23,714.81 L1395.00,652.50 L1521.00,652.50 L1516.50,760.50 L1516.82,763.18 L1545.00,996.00 L1848.00,997.50 L1848.11,992.16 L1855.50,655.50 L1860.82,655.50 L2020.50,655.50 L2020.57,660.84 L2025.00,997.50 L2030.39,997.50 L2947.50,997.50 L2948.73,992.38 L2989.50,823.50 L3034.50,823.50 L3046.50,999.00 L3895.50,999.00 L3897.84,994.22 L3933.00,922.50 L3938.25,922.75 L3964.50,924.00 L4084.50,684.00 L3993.00,78.00 L3987.64,78.21 L3918.00,81.00 L3917.10,75.90 L3904.50,4.50" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1884.00,656.00 L1877.41,1159.01 L1877.32,1165.94 L1894.00,1525.00 L1839.00,1526.00 L1846.00,1607.00 L1695.58,1607.98 L1692.00,1608.00 L1678.40,1486.57 L1678.00,1483.00 L1570.00,1482.00 L1587.00,1608.00 L1433.00,1609.00 L1417.67,1530.42 L1417.00,1527.00 L1367.53,1527.93 L1364.00,1528.00 L1283.00,1153.00 L1296.00,997.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1666.00,997.00 L1659.08,1299.44 L1659.00,1303.00 L1667.65,1390.50 L1668.00,1394.00 L1722.00,1395.00 L1698.00,1155.00 L1703.00,1000.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1487.00,653.00 L1464.16,1151.41 L1464.00,1155.00 L1500.46,1390.49 L1501.00,1394.00 L1557.00,1394.00 L1543.00,1309.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1283.60,1155.79 L1464.00,1155.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1555.00,997.00 L1543.00,1302.00 L1659.00,1303.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1877.41,1159.01 L1698.62,1161.24" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2111.00,999.00 L2112.95,1152.43 L2113.00,1156.00 L2104.07,1601.41 L2104.00,1605.00 L1952.52,1606.95 L1949.00,1607.00 L1935.00,1155.00 L1942.00,656.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2112.84,1164.08 L1935.25,1163.05" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2580.00,1000.00 L2584.89,1151.48 L2585.00,1155.00 L2557.51,1347.44 L2557.00,1351.00 L2448.50,1351.00 L2445.00,1351.00 L2438.00,1395.00 L2549.00,1395.00 L2518.53,1600.46 L2518.00,1604.00 L2362.00,1606.00 L2375.00,1484.00 L2322.00,1484.00 L2313.26,1603.49 L2313.00,1607.00 L2157.00,1608.00 L2173.00,1154.00 L2169.00,998.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2343.00,1001.00 L2349.84,1150.44 L2350.00,1154.00 L2336.00,1302.00 L2387.56,1302.00 L2391.00,1302.00 L2408.00,1154.00 L2402.00,1000.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2179.00,1161.00 L2339.00,1159.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2407.28,1160.26 L2584.18,1160.74" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2810.00,1001.00 L2823.67,1151.42 L2824.00,1155.00 L2726.77,1600.49 L2726.00,1604.00 L2570.00,1605.00 L2645.00,1154.00 L2635.00,1002.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2643.89,1160.65 L2822.45,1162.10" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1607.00,1642.00 L1411.00,1641.00 L1393.38,1561.69 L1393.00,1560.00 L1341.77,1560.97 L1340.00,1561.00 L1253.00,1157.00 L1267.00,1000.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1614.00,1641.00 L1620.00,1527.00 L1654.00,1528.00 L1667.00,1642.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1865.00,1641.00 L1674.00,1641.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1933.00,1641.00 L2743.00,1641.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M2846.00,998.00 L2857.73,1150.45 L2858.00,1154.00 L2749.00,1643.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            <path class="line" d="M1924.00,1639.00 L1920.00,1561.00 L1916.50,1561.07 L1871.00,1562.00 L1875.00,1641.00" fill="none" stroke="rgba(210, 115, 254)" stroke-width="25.00" stroke-opacity="1.00" stroke-linejoin="round"/>
            </g>
        </svg>

        <!-- Final Logo -->
        <!-- <img id="final-logo" src="/Images/Logo/Beyond_Wiki_logo_crop.webp" class="final-logo"> -->
    </div>

    <!-- Text -->
    <div class="loading-text-container">
        <p id="loading-text" class="loading-text">Loading</p>
    </div>
</section>

<script type="module" src="/features/loading/loading.js"></script>