<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>गाव सर्वेक्षण अहवाल</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #2c5aa0, #1e4080);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .header .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #2c5aa0;
            font-size: 1.2rem;
        }

        .container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .filters-section {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border: 1px solid #e0e0e0;
        }

        .filters-title {
            font-size: 1.3rem;
            font-weight: 600;
            /* color: #2c5aa0; */
            color: #3498db;
            margin-bottom: 20px;
            border-bottom: 2px solid #e8f0fe;
            padding-bottom: 10px;
        }

        .filter-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
        }

        .filter-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .filter-select {
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            background: white;
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 12px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 40px;
        }

        .filter-select:focus {
            outline: none;
            border-color: #2c5aa0;
            box-shadow: 0 0 0 3px rgba(44, 90, 160, 0.1);
        }

        .buttons-row {
            display: flex;
            gap: 15px;
            justify-content: flex-start;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #2c5aa0, #1e4080);
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #1e4080, #162e5c);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(44, 90, 160, 0.3);
        }

        .btn-secondary {
            background: #f8f9fa;
            color: #666;
            border: 2px solid #ddd;
        }

        .btn-secondary:hover {
            background: #e9ecef;
            border-color: #bbb;
        }

        .btn-export {
            background: linear-gradient(135deg, #17a2b8, #138496);
            color: white;
            margin-left: auto;
        }

        .btn-export:hover {
            background: linear-gradient(135deg, #138496, #0f6674);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(23, 162, 184, 0.3);
        }

        .report-section {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border: 1px solid #e0e0e0;
        }

        .report-header {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 20px 25px;
            border-bottom: 2px solid #dee2e6;
        }

        .report-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2c5aa0;
            margin-bottom: 10px;
        }

        .report-info {
            color: #666;
            font-size: 0.95rem;
        }

        .table-container {
            overflow-x: auto;
        }

        .report-table {
            width: 100%;
            border-collapse: collapse;
        }

        .report-table th {
            background: linear-gradient(135deg, #2c5aa0, #1e4080);
            color: white;
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 1rem;
            border-bottom: 3px solid #1e4080;
        }

        .report-table th:first-child {
            width: 50%;
        }

        .report-table td {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            font-size: 0.95rem;
        }

        .report-table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .report-table tbody tr:nth-child(even) {
            background-color: #fafafa;
        }

        .percentage-positive {
            color: #28a745;
            font-weight: 600;
        }

        .percentage-negative {
            color: #dc3545;
            font-weight: 600;
        }

        .count-cell {
            text-align: center;
            font-weight: 600;
        }

        .stats-summary {
            background: linear-gradient(135deg, #e8f0fe, #f0f7ff);
            padding: 20px 25px;
            margin-bottom: 25px;
            border-radius: 12px;
            border: 1px solid #c6d9f7;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .stat-item {
            text-align: center;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2c5aa0;
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            .filter-row {
                grid-template-columns: 1fr;
            }
            
            .buttons-row {
                flex-direction: column;
            }
            
            .btn-export {
                margin-left: 0;
            }
            
            .report-table th,
            .report-table td {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
    .filter-select {
        font-size: 0.9rem;
        padding: 10px 12px;
        padding-right: 35px;
    }

    .filter-label {
        font-size: 0.85rem;
    }

    .stat-number {
        font-size: 1.5rem;
    }

    .btn {
        padding: 10px 20px;
        font-size: 0.95rem;
    }

    .filters-title {
        font-size: 1.1rem;
    }
}

    </style>
</head>
<body>
    <!-- <div class="header">
        <div class="logo">महाराष्ट्र</div>
        <h1>महाराष्ट्र शासन</h1>
        <div class="subtitle">आदिवासी विकास विभाग</div>
    </div> -->
    <?php include 'include/header.php'; ?>

    <div class="container1">
        <!-- Filters Section -->
        <div class="filters-section">
            <h2 class="filters-title">📊 योजना डेटा</h2>
            
            <div class="filter-row">
                <div class="filter-group">
                    <label class="filter-label">फॉर्म</label>
                    <select class="filter-select" id="formFilter">
                        <option value="">-- फॉर्म निवडा --</option>
                        <option value="survey1">मुख्य रस्ता आहे का?</option>
                        <option value="survey2">शिक्षण सुविधा</option>
                        <option value="survey3">आरोग्य सुविधा</option>
                        <option value="survey4">पाणी पुरवठा</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label class="filter-label">प्रश्न</label>
                    <select class="filter-select" id="questionFilter">
                        <option value="">-- सर्व प्रश्न --</option>
                        <option value="q1">मुख्य रस्ता आहे का?</option>
                        <option value="q2">शाळा जवळ आहे का?</option>
                        <option value="q3">प्राथमिक आरोग्य केंद्र आहे का?</option>
                        <option value="q4">स्वच्छ पाणी मिळते का?</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label class="filter-label">तालुका</label>
                    <select class="filter-select" id="talukaFilter">
                        <option value="">-- सर्व तालुके --</option>
                        <option value="taluka1">अकलूज</option>
                        <option value="taluka2">बारामती</option>
                        <option value="taluka3">दौंड</option>
                        <option value="taluka4">इंदापूर</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label class="filter-label">गाव</label>
                    <select class="filter-select" id="villageFilter">
                        <option value="">-- गाव निवडा --</option>
                        <option value="village1">अकलूज</option>
                        <option value="village2">बारामती</option>
                        <option value="village3">दौंड</option>
                        <option value="village4">इंदापूर</option>
                    </select>
                </div>
            </div>

            <div class="buttons-row">
                <button class="btn btn-primary" onclick="applyFilters()">
                    <span>🔍</span> फिल्टर लागू करा
                </button>
                <button class="btn btn-secondary" onclick="resetFilters()">
                    <span>↻</span> रीसेट
                </button>
                <button class="btn btn-export" onclick="exportData()">
                    <span>📤</span> एक्सपोर्ट
                </button>
            </div>
        </div>

        <!-- Stats Summary -->
        <div class="stats-summary">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">43</span>
                    <div class="stat-label">एकूण प्रतिसाद</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">10</span>
                    <div class="stat-label">होय उत्तरे</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4</span>
                    <div class="stat-label">नाही उत्तरे</div>
                </div>
                <div class="stat-item">
                    <span class="stat-number">29%</span>
                    <div class="stat-label">सकारात्मक टक्केवारी</div>
                </div>
            </div>
        </div>

        <!-- Report Table -->
        <div class="report-section">
            <div class="report-header">
                <h3 class="report-title">📋 गाव सर्वेक्षण अहवाल</h3>
                <div class="report-info">
                    अद्यतनित: 21-07-2025 | एकूण नोंदी: 43
                </div>
            </div>
            
            <div class="table-container">
                <table class="report-table">
                    <thead>
                        <tr>
                            <th>प्रश्न</th>
                            <th>होय</th>
                            <th>नाही</th>
                            <th>होय (%)</th>
                            <th>नाही (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>मुख्य रस्ता आहे का?</td>
                            <td class="count-cell">10</td>
                            <td class="count-cell">4</td>
                            <td class="count-cell percentage-positive">71%</td>
                            <td class="count-cell percentage-negative">29%</td>
                        </tr>
                        <tr>
                            <td>गावात शाळा आहे का?</td>
                            <td class="count-cell">12</td>
                            <td class="count-cell">2</td>
                            <td class="count-cell percentage-positive">86%</td>
                            <td class="count-cell percentage-negative">14%</td>
                        </tr>
                        <tr>
                            <td>प्राथमिक आरोग्य केंद्र आहे का?</td>
                            <td class="count-cell">8</td>
                            <td class="count-cell">6</td>
                            <td class="count-cell percentage-positive">57%</td>
                            <td class="count-cell percentage-negative">43%</td>
                        </tr>
                        <tr>
                            <td>स्वच्छ पिण्याचे पाणी मिळते का?</td>
                            <td class="count-cell">11</td>
                            <td class="count-cell">3</td>
                            <td class="count-cell percentage-positive">79%</td>
                            <td class="count-cell percentage-negative">21%</td>
                        </tr>
                        <tr>
                            <td>वीज पुरवठा नियमित आहे का?</td>
                            <td class="count-cell">6</td>
                            <td class="count-cell">8</td>
                            <td class="count-cell percentage-positive">43%</td>
                            <td class="count-cell percentage-negative">57%</td>
                        </tr>
                        <tr>
                            <td>बाजारपेठ जवळ आहे का?</td>
                            <td class="count-cell">9</td>
                            <td class="count-cell">5</td>
                            <td class="count-cell percentage-positive">64%</td>
                            <td class="count-cell percentage-negative">36%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include 'include/footer.php'; ?>
    <script>
        function applyFilters() {
            const form = document.getElementById('formFilter').value;
            const question = document.getElementById('questionFilter').value;
            const taluka = document.getElementById('talukaFilter').value;
            const village = document.getElementById('villageFilter').value;
            
            // Simulate filter application
            // alert('फिल्टर लागू केले:\n' + 
            //       'फॉर्म: ' + (form || 'सर्व') + '\n' +
            //       'प्रश्न: ' + (question || 'सर्व') + '\n' +
            //       'तालुका: ' + (taluka || 'सर्व') + '\n' +
            //       'गाव: ' + (village || 'सर्व'));
        }

        function resetFilters() {
            document.getElementById('formFilter').selectedIndex = 0;
            document.getElementById('questionFilter').selectedIndex = 0;
            document.getElementById('talukaFilter').selectedIndex = 0;
            document.getElementById('villageFilter').selectedIndex = 0;
            
            // alert('सर्व फिल्टर रीसेट केले');
        }

        function exportData() {
            alert('डेटा एक्सपोर्ट करत आहे...\nExcel/PDF फॉर्मेटमध्ये डाउनलोड होईल');
        }

        // Add interactivity to table rows
        document.querySelectorAll('.report-table tbody tr').forEach(row => {
            row.addEventListener('click', function() {
                const question = this.cells[0].textContent;
                // alert('प्रश्न निवडला: ' + question);
            });
        });
    </script>
</body>
</html>