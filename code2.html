<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ Thị Hàm Số y = ax²</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #ffffff;
            color: #000000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .header {
            padding: 25px;
            border-bottom: 1px solid #e0e0e0;
            background: #ffffff;
            text-align: center;
        }
        
        .main-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #0066cc;
        }
        
        .subtitle {
            font-size: 16px;
            color: #666666;
        }
        
        .content {
            padding: 25px;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            margin-bottom: 25px;
        }
        
        .col-left {
            flex: 1;
            min-width: 350px;
        }
        
        .col-right {
            flex: 2;
            min-width: 700px;
        }
        
        .panel {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.03);
        }
        
        .panel-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 2px solid #0066cc;
            color: #000000;
        }
        
        .control-group {
            margin-bottom: 20px;
        }
        
        .control-label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333333;
            font-size: 15px;
        }
        
        .control-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            background-color: #ffffff;
            color: #000000;
            font-size: 15px;
            transition: border 0.3s;
        }
        
        .control-input:focus {
            outline: none;
            border-color: #0066cc;
            box-shadow: 0 0 0 2px rgba(0, 102, 204, 0.1);
        }
        
        .slider-container {
            padding: 5px 0;
        }
        
        .slider-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            font-size: 13px;
            color: #666666;
        }
        
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn {
            flex: 1;
            padding: 14px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            font-size: 15px;
            transition: all 0.3s;
            text-align: center;
        }
        
        .btn-primary {
            background-color: #0066cc;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #0055aa;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 102, 204, 0.2);
        }
        
        .btn-secondary {
            background-color: #009933;
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: #008822;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 153, 51, 0.2);
        }
        
        .btn-warning {
            background-color: #ff6600;
            color: white;
        }
        
        .btn-warning:hover {
            background-color: #e65500;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(255, 102, 0, 0.2);
        }
        
        .property-list {
            list-style-type: none;
        }
        
        .property-item {
            margin-bottom: 12px;
            padding-left: 20px;
            position: relative;
            font-size: 14px;
        }
        
        .property-item:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #0066cc;
            font-weight: bold;
        }
        
        .chart-container {
            height: 450px;
            position: relative;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        
        th {
            background-color: #f5f5f5;
            padding: 12px;
            border: 1px solid #e0e0e0;
            text-align: center;
            font-weight: 600;
            color: #333333;
        }
        
        td {
            padding: 10px;
            border: 1px solid #e0e0e0;
            text-align: center;
            color: #000000;
        }
        
        .analysis-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .analysis-box {
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            background-color: #f9f9f9;
        }
        
        .analysis-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333333;
            font-size: 14px;
        }
        
        .note-box {
            padding: 15px;
            border: 1px solid #cce5ff;
            border-radius: 6px;
            background-color: #f0f8ff;
        }
        
        .algorithm-box {
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        
        .algorithm-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .algorithm-step {
            padding: 12px;
            border-left: 4px solid #0066cc;
            background-color: #ffffff;
            font-size: 14px;
        }
        
        .footer {
            padding: 20px;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            background: #ffffff;
            font-size: 14px;
            color: #666666;
        }
        
        .support-section {
            margin-top: 25px;
            border-top: 1px solid #e0e0e0;
            padding-top: 25px;
        }
        
        .problem-selector {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .problem-card {
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
            background-color: #ffffff;
        }
        
        .problem-card:hover {
            background-color: #f0f8ff;
            border-color: #0066cc;
            transform: translateY(-2px);
        }
        
        .problem-card.active {
            background-color: #e6f2ff;
            border-color: #0066cc;
        }
        
        .problem-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: #000000;
            font-size: 15px;
        }
        
        .problem-desc {
            font-size: 13px;
            color: #666666;
        }
        
        .solution-box {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            background-color: #f9f9f9;
            display: none;
        }
        
        .solution-box.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .solution-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: #0066cc;
            font-size: 18px;
        }
        
        .solution-content {
            font-size: 15px;
            line-height: 1.6;
            color: #000000;
        }
        
        .solution-step {
            margin-bottom: 12px;
            padding-left: 20px;
            position: relative;
        }
        
        .solution-step:before {
            content: "→";
            position: absolute;
            left: 0;
            color: #0066cc;
            font-weight: bold;
        }
        
        .indicator {
            display: inline-block;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
        }
        
        .indicator-positive {
            background-color: #0066cc;
        }
        
        .indicator-negative {
            background-color: #ff6600;
        }
        
        .input-hint {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            font-size: 13px;
            color: #666666;
        }
        
        .table-container {
            overflow-x: auto;
            margin-top: 10px;
        }
        
        .coefficient-info {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .info-box {
            flex: 1;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
            font-size: 13px;
        }
        
        .info-positive {
            background-color: #e6f2ff;
            color: #0066cc;
        }
        
        .info-negative {
            background-color: #ffe6e6;
            color: #cc0000;
        }
        
        @media (max-width: 1200px) {
            .row {
                flex-direction: column;
            }
            
            .col-left, .col-right {
                min-width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .content {
                padding: 15px;
            }
            
            .panel {
                padding: 15px;
            }
            
            .analysis-grid {
                grid-template-columns: 1fr;
            }
            
            .button-group {
                flex-direction: column;
            }
            
            .coefficient-info {
                flex-direction: column;
            }
        }
    </style><div class="flex items-center space-x-3">
            <button onclick="window.print()" class="p-2.5 bg-gray-50 hover:bg-gray-200 rounded-xl transition-all" title="In đề thi">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2m-2 4H8v-4h8v4z"/></svg>
            </button>
        </div>
    <script>
        let parabolaChart = null;
        let currentA = 1;
        let currentRange = 5;
        let pointCount = 9;

        function init() {
            updateRangeDisplay();
            drawParabola();
            
            document.getElementById('aValue').addEventListener('input', function() {
                if (parseFloat(this.value) === 0) this.value = 0.1;
            });
            
            document.getElementById('xRange').addEventListener('input', updateRangeDisplay);
            document.getElementById('drawBtn').addEventListener('click', drawParabola);
            document.getElementById('resetBtn').addEventListener('click', resetValues);
            document.getElementById('solveBtn').addEventListener('click', solveProblem);
            
            // Thiết lập sự kiện cho các dạng bài tập
            const problemCards = document.querySelectorAll('.problem-card');
            problemCards.forEach(card => {
                card.addEventListener('click', function() {
                    // Xóa class active từ tất cả các card
                    problemCards.forEach(c => c.classList.remove('active'));
                    // Thêm class active cho card được click
                    this.classList.add('active');
                    
                    // Hiển thị phần giải tương ứng
                    const problemType = this.getAttribute('data-problem');
                    showSolution(problemType);
                });
            });
            
            // Kích hoạt card đầu tiên
            if (problemCards.length > 0) {
                problemCards[0].classList.add('active');
                showSolution('find-vertex');
            }
        }

        function updateRangeDisplay() {
            currentRange = parseInt(document.getElementById('xRange').value);
            document.getElementById('rangeMin').textContent = -currentRange;
            document.getElementById('rangeMax').textContent = currentRange;
            document.getElementById('rangeValue').textContent = currentRange;
        }

        function calculateParabolaData() {
            const xValues = [];
            const yValues = [];
            const points = [];
            const step = (2 * currentRange) / (pointCount - 1);
            
            for (let i = 0; i < pointCount; i++) {
                const x = -currentRange + (i * step);
                const y = currentA * Math.pow(x, 2);
                xValues.push(x);
                yValues.push(y);
                points.push({x, y});
            }
            return {xValues, yValues, points};
        }

        function updateValueTable(points) {
            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';
            
            points.forEach(point => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${point.x.toFixed(2)}</td>
                    <td>${point.y.toFixed(2)}</td>
                    <td>(${point.x.toFixed(2)}, ${point.y.toFixed(2)})</td>
                `;
                tableBody.appendChild(row);
            });
        }

        function updateAnalysis() {
            const aElem = document.getElementById('aAnalysis');
            const vertexElem = document.getElementById('vertexAnalysis');
            const axisElem = document.getElementById('axisAnalysis');
            const shapeElem = document.getElementById('shapeAnalysis');
            const rangeElem = document.getElementById('rangeAnalysis');
            const variationElem = document.getElementById('variationAnalysis');
            
            // Cập nhật phân tích hệ số a
            if (currentA > 0) {
                aElem.innerHTML = `<span class="indicator indicator-positive"></span>a = ${currentA.toFixed(2)} > 0: Parabol mở lên trên`;
            } else {
                aElem.innerHTML = `<span class="indicator indicator-negative"></span>a = ${currentA.toFixed(2)} < 0: Parabol mở xuống dưới`;
            }
            
            // Cập nhật đỉnh parabol
            vertexElem.textContent = `O(0, 0)`;
            
            // Cập nhật trục đối xứng
            axisElem.textContent = 'Trục tung Oy (x = 0)';
            
            // Cập nhật hình dạng parabol
            const absA = Math.abs(currentA);
            if (absA > 1) {
                shapeElem.textContent = `Parabol hẹp (|a| = ${absA.toFixed(2)} > 1)`;
            } else if (absA < 1) {
                shapeElem.textContent = `Parabol rộng (|a| = ${absA.toFixed(2)} < 1)`;
            } else {
                shapeElem.textContent = 'Parabol chuẩn (|a| = 1)';
            }
            
            // Cập nhật tập giá trị
            if (currentA > 0) {
                rangeElem.textContent = 'T = [0, +∞)';
            } else {
                rangeElem.textContent = 'T = (-∞, 0]';
            }
            
            // Cập nhật biến thiên
            if (currentA > 0) {
                variationElem.textContent = 'Giảm trên (-∞, 0), Tăng trên (0, +∞)';
            } else {
                variationElem.textContent = 'Tăng trên (-∞, 0), Giảm trên (0, +∞)';
            }
        }

        function renderChart(xValues, yValues) {
            const ctx = document.getElementById('parabolaChart').getContext('2d');
            
            if (parabolaChart) parabolaChart.destroy();
            
            parabolaChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: xValues.map(x => x.toFixed(1)),
                    datasets: [{
                        label: `y = ${currentA.toFixed(2)}x²`,
                        data: yValues,
                        borderColor: '#0066cc',
                        backgroundColor: 'rgba(0, 102, 204, 0.1)',
                        pointBackgroundColor: '#0066cc',
                        pointBorderColor: '#ffffff',
                        pointRadius: 6,
                        pointBorderWidth: 2,
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { 
                            labels: { 
                                font: { 
                                    size: 15,
                                    weight: 'bold'
                                } 
                            } 
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: { size: 14 },
                            bodyFont: { size: 14 }
                        }
                    },
                    scales: {
                        x: {
                            title: { 
                                display: true, 
                                text: 'Trục hoành (x)', 
                                font: { 
                                    size: 16, 
                                    weight: 'bold' 
                                },
                                color: '#000000'
                            },
                            grid: { 
                                color: 'rgba(0,0,0,0.1)' 
                            },
                            ticks: {
                                font: {
                                    size: 13
                                }
                            }
                        },
                        y: {
                            title: { 
                                display: true, 
                                text: 'Trục tung (y)', 
                                font: { 
                                    size: 16, 
                                    weight: 'bold' 
                                },
                                color: '#000000'
                            },
                            grid: { 
                                color: 'rgba(0,0,0,0.1)' 
                            },
                            ticks: {
                                font: {
                                    size: 13
                                }
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'nearest'
                    }
                }
            });
        }

        function drawParabola() {
            currentA = parseFloat(document.getElementById('aValue').value);
            if (currentA === 0) {
                alert('Hệ số a phải khác 0');
                document.getElementById('aValue').value = 1;
                currentA = 1;
            }
            
            pointCount = parseInt(document.getElementById('pointCount').value);
            const {xValues, yValues, points} = calculateParabolaData();
            
            updateValueTable(points);
            updateAnalysis();
            renderChart(xValues, yValues);
        }

        function resetValues() {
            document.getElementById('aValue').value = 1;
            document.getElementById('xRange').value = 5;
            document.getElementById('pointCount').value = 9;
            updateRangeDisplay();
            drawParabola();
            
            // Đặt lại tất cả các card bài tập
            const problemCards = document.querySelectorAll('.problem-card');
            problemCards.forEach(card => card.classList.remove('active'));
            if (problemCards.length > 0) {
                problemCards[0].classList.add('active');
                showSolution('find-vertex');
            }
            
            // Xóa bài toán tùy chỉnh
            document.getElementById('problemInput').value = '';
            document.getElementById('customSolutionContent').innerHTML = 'Nhập bài toán vào ô "Giải bài toán tùy chỉnh" và nhấn nút "GIẢI BÀI TOÁN" để xem lời giải.';
        }

        function showSolution(problemType) {
            // Ẩn tất cả các phần giải
            const solutions = document.querySelectorAll('.solution-box');
            solutions.forEach(solution => solution.classList.remove('active'));
            
            // Hiển thị phần giải được chọn
            const selectedSolution = document.getElementById(problemType + '-solution');
            if (selectedSolution) {
                selectedSolution.classList.add('active');
            }
        }

        function solveProblem() {
            const problemInput = document.getElementById('problemInput').value.trim();
            
            if (!problemInput) {
                alert('Vui lòng nhập bài toán cần giải!');
                return;
            }
            
            // Xử lý bài toán nhập vào
            let solutionText = "";
            
            // Phân tích bài toán đơn giản
            if (problemInput.includes("tìm đỉnh") || problemInput.includes("đỉnh của parabol")) {
                solutionText = `
                    <div class="solution-step">Với hàm số y = ax², đỉnh của parabol luôn là điểm O(0, 0).</div>
                    <div class="solution-step">Vì vậy, đỉnh parabol của hàm số y = ${currentA.toFixed(2)}x² là O(0, 0).</div>
                `;
                showSolution('find-vertex');
            } else if (problemInput.includes("tìm trục đối xứng") || problemInput.includes("trục đối xứng")) {
                solutionText = `
                    <div class="solution-step">Với hàm số y = ax², trục đối xứng luôn là trục tung (Oy).</div>
                    <div class="solution-step">Phương trình trục đối xứng: x = 0.</div>
                `;
                showSolution('find-axis');
            } else if (problemInput.includes("tính giá trị") || problemInput.includes("f(")) {
                // Tìm giá trị x trong câu hỏi
                const xMatch = problemInput.match(/f\(([^)]+)\)/);
                if (xMatch) {
                    const xValue = parseFloat(xMatch[1]);
                    const yValue = currentA * Math.pow(xValue, 2);
                    solutionText = `
                        <div class="solution-step">Thay x = ${xValue} vào hàm số y = ${currentA.toFixed(2)}x²:</div>
                        <div class="solution-step">y = ${currentA.toFixed(2)} × (${xValue})² = ${currentA.toFixed(2)} × ${Math.pow(xValue, 2).toFixed(2)} = ${yValue.toFixed(2)}</div>
                        <div class="solution-step">Vậy f(${xValue}) = ${yValue.toFixed(2)}</div>
                    `;
                } else {
                    solutionText = "Không tìm thấy giá trị x trong bài toán. Vui lòng nhập dạng: Tính f(2) với hàm số y = ax²";
                }
                showSolution('calculate-value');
            } else if (problemInput.includes("biến thiên") || problemInput.includes("đồng biến") || problemInput.includes("nghịch biến")) {
                if (currentA > 0) {
                    solutionText = `
                        <div class="solution-step">Với a = ${currentA.toFixed(2)} > 0:</div>
                        <div class="solution-step">• Hàm số nghịch biến trên khoảng (-∞, 0)</div>
                        <div class="solution-step">• Hàm số đồng biến trên khoảng (0, +∞)</div>
                    `;
                } else {
                    solutionText = `
                        <div class="solution-step">Với a = ${currentA.toFixed(2)} < 0:</div>
                        <div class="solution-step">• Hàm số đồng biến trên khoảng (-∞, 0)</div>
                        <div class="solution-step">• Hàm số nghịch biến trên khoảng (0, +∞)</div>
                    `;
                }
                showSolution('analyze-variation');
            } else {
                solutionText = `
                    <div class="solution-step">Bài toán: "${problemInput}"</div>
                    <div class="solution-step">Hàm số hiện tại: y = ${currentA.toFixed(2)}x²</div>
                    <div class="solution-step">Vui lòng chọn một trong các dạng bài tập bên dưới để xem hướng dẫn chi tiết.</div>
                `;
            }
            
            // Hiển thị giải pháp tùy chỉnh
            const customSolution = document.getElementById('custom-solution');
            const customSolutionContent = document.getElementById('customSolutionContent');
            customSolutionContent.innerHTML = solutionText;
            customSolution.classList.add('active');
            
            // Đánh dấu card tùy chỉnh là active
            const problemCards = document.querySelectorAll('.problem-card');
            problemCards.forEach(card => card.classList.remove('active'));
            document.querySelector('[data-problem="custom"]').classList.add('active');
        }

        window.addEventListener('DOMContentLoaded', init);
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="main-title">ĐỒ THỊ HÀM SỐ y = ax²</div>
            <div class="subtitle">Phần mềm hỗ trợ học tập Toán 9</div>
        </div>
        
        <div class="content">
            <div class="row">
                <div class="col-left">
                    <div class="panel">
                        <div class="panel-title">THIẾT LẬP THAM SỐ</div>
                        
                        <div class="control-group">
                            <label class="control-label">Hệ số a (a ≠ 0):</label>
                            <input type="number" id="aValue" class="control-input" step="0.1" value="1" min="-10" max="10">
                            <div class="input-hint">
                                <span>a > 0: Parabol mở lên</span>
                                <span>a < 0: Parabol mở xuống</span>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Miền giá trị x: [-R, R]</label>
                            <div class="slider-container">
                                <input type="range" id="xRange" class="control-input" min="1" max="10" value="5" step="1">
                            </div>
                            <div class="slider-labels">
                                <span id="rangeMin">-5</span>
                                <span>R = <span id="rangeValue">5</span></span>
                                <span id="rangeMax">5</span>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Số điểm trên đồ thị:</label>
                            <select id="pointCount" class="control-input">
                                <option value="5">5 điểm</option>
                                <option value="7">7 điểm</option>
                                <option value="9" selected>9 điểm</option>
                                <option value="11">11 điểm</option>
                                <option value="13">13 điểm</option>
                                <option value="15">15 điểm</option>
                            </select>
                        </div>
                        
                        <div class="button-group">
                            <button id="drawBtn" class="btn btn-primary">VẼ ĐỒ THỊ</button>
                            <button id="resetBtn" class="btn btn-warning">THIẾT LẬP LẠI</button>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <div class="panel-title">TÍNH CHẤT HÀM SỐ y = ax²</div>
                        
                        <ul class="property-list">
                            <li class="property-item"><strong>Tập xác định:</strong> D = ℝ (tất cả số thực)</li>
                            <li class="property-item"><strong>Tập giá trị:</strong> 
                                <span id="rangeValueDisplay">[0, +∞) với a > 0</span>
                            </li>
                            <li class="property-item"><strong>Tính chẵn lẻ:</strong> Hàm số chẵn (f(-x) = f(x))</li>
                            <li class="property-item"><strong>Đỉnh parabol:</strong> O(0, 0) - gốc tọa độ</li>
                            <li class="property-item"><strong>Trục đối xứng:</strong> Trục tung (x = 0)</li>
                            <li class="property-item"><strong>Biến thiên:</strong> Phụ thuộc vào dấu của a</li>
                            <li class="property-item"><strong>Đồ thị:</strong> Parabol đi qua gốc O(0,0)</li>
                        </ul>
                        
                        <div class="coefficient-info">
                            <div class="info-box info-positive">
                                <strong>a > 0</strong><br>
                                Parabol mở lên trên
                            </div>
                            <div class="info-box info-negative">
                                <strong>a < 0</strong><br>
                                Parabol mở xuống dưới
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <div class="panel-title">GIẢI BÀI TOÁN TÙY CHỈNH</div>
                        
                        <div class="control-group">
                            <label class="control-label">Nhập bài toán cần giải:</label>
                            <textarea id="problemInput" class="control-input" rows="4" placeholder="Ví dụ: Tìm đỉnh của parabol y = 2x² hoặc Tính f(3) với hàm số đang xét..."></textarea>
                        </div>
                        
                        <div class="button-group">
                            <button id="solveBtn" class="btn btn-secondary">GIẢI BÀI TOÁN</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-right">
                    <div class="panel">
                        <div class="panel-title">ĐỒ THỊ HÀM SỐ</div>
                        <div class="chart-container">
                            <canvas id="parabolaChart"></canvas>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <div class="panel-title">BẢNG GIÁ TRỊ TƯƠNG ỨNG</div>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Giá trị x</th>
                                        <th>Giá trị y = f(x)</th>
                                        <th>Điểm trên đồ thị</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <!-- Dữ liệu sẽ được thêm vào đây -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <div class="panel-title">PHÂN TÍCH HÀM SỐ</div>
                        
                        <div class="analysis-grid">
                            <div class="analysis-box">
                                <div class="analysis-title">Hệ số a:</div>
                                <div id="aAnalysis">-</div>
                            </div>
                            
                            <div class="analysis-box">
                                <div class="analysis-title">Đỉnh parabol:</div>
                                <div id="vertexAnalysis">-</div>
                            </div>
                            
                            <div class="analysis-box">
                                <div class="analysis-title">Trục đối xứng:</div>
                                <div id="axisAnalysis">-</div>
                            </div>
                            
                            <div class="analysis-box">
                                <div class="analysis-title">Hình dạng:</div>
                                <div id="shapeAnalysis">-</div>
                            </div>
                            
                            <div class="analysis-box">
                                <div class="analysis-title">Tập giá trị:</div>
                                <div id="rangeAnalysis">-</div>
                            </div>
                            
                            <div class="analysis-box">
                                <div class="analysis-title">Biến thiên:</div>
                                <div id="variationAnalysis">-</div>
                            </div>
                        </div>
                        
                        <div class="note-box">
                            <div style="font-weight: 600; margin-bottom: 8px; color: #0066cc;">Ghi chú quan trọng:</div>
                            <div style="font-size: 14px;">
                                • Đồ thị hàm số y = ax² luôn là một parabol có đỉnh tại gốc tọa độ O(0,0).<br>
                                • Khi |a| càng lớn, parabol càng hẹp; khi |a| càng nhỏ, parabol càng rộng.<br>
                                • Hàm số đồng biến hay nghịch biến phụ thuộc vào dấu của hệ số a.<br>
                                • Đồ thị nhận trục tung làm trục đối xứng.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="support-section">
                <div class="panel">
                    <div class="panel-title">HƯỚNG DẪN GIẢI CÁC DẠNG BÀI TẬP</div>
                    
                    <div class="problem-selector">
                        <div class="problem-card active" data-problem="find-vertex">
                            <div class="problem-title">Dạng 1: Tìm đỉnh của parabol</div>
                            <div class="problem-desc">Xác định tọa độ đỉnh của đồ thị hàm số y = ax²</div>
                        </div>
                        
                        <div class="problem-card" data-problem="find-axis">
                            <div class="problem-title">Dạng 2: Tìm trục đối xứng</div>
                            <div class="problem-desc">Xác định trục đối xứng của parabol</div>
                        </div>
                        
                        <div class="problem-card" data-problem="calculate-value">
                            <div class="problem-title">Dạng 3: Tính giá trị hàm số</div>
                            <div class="problem-desc">Tính f(x₀) khi biết giá trị x₀</div>
                        </div>
                        
                        <div class="problem-card" data-problem="analyze-variation">
                            <div class="problem-title">Dạng 4: Xét tính biến thiên</div>
                            <div class="problem-desc">Xét tính đồng biến, nghịch biến của hàm số</div>
                        </div>
                        
                        <div class="problem-card" data-problem="compare-graph">
                            <div class="problem-title">Dạng 5: So sánh đồ thị</div>
                            <div class="problem-desc">So sánh parabol với các giá trị a khác nhau</div>
                        </div>
                        
                        <div class="problem-card" data-problem="custom">
                            <div class="problem-title">Dạng 6: Bài toán tùy chỉnh</div>
                            <div class="problem-desc">Giải bài toán do người dùng nhập vào</div>
                        </div>
                    </div>
                    
                    <div id="find-vertex-solution" class="solution-box">
                        <div class="solution-title">Hướng dẫn giải: Tìm đỉnh của parabol</div>
                        <div class="solution-content">
                            <div class="solution-step">Với hàm số bậc hai dạng y = ax² (khuyết b và c), đỉnh của parabol luôn nằm tại gốc tọa độ O(0, 0).</div>
                            <div class="solution-step">Lý do: Hàm số đạt cực trị (cực tiểu nếu a > 0, cực đại nếu a < 0) tại x = 0.</div>
                            <div class="solution-step">Thay x = 0 vào hàm số: y = a × 0² = 0.</div>
                            <div class="solution-step">Vậy tọa độ đỉnh là I(0, 0).</div>
                            <div class="solution-step">Với hàm số hiện tại y = ${currentA.toFixed(2)}x², đỉnh parabol là O(0, 0).</div>
                        </div>
                    </div>
                    
                    <div id="find-axis-solution" class="solution-box">
                        <div class="solution-title">Hướng dẫn giải: Tìm trục đối xứng</div>
                        <div class="solution-content">
                            <div class="solution-step">Với hàm số y = ax², đồ thị là một parabol nhận trục tung làm trục đối xứng.</div>
                            <div class="solution-step">Lý do: Hàm số là hàm chẵn, tức là f(-x) = f(x) với mọi x.</div>
                            <div class="solution-step">Điều này có nghĩa nếu điểm (x, y) thuộc đồ thị thì điểm (-x, y) cũng thuộc đồ thị.</div>
                            <div class="solution-step">Hai điểm này đối xứng với nhau qua trục tung.</div>
                            <div class="solution-step">Vậy trục đối xứng của parabol là đường thẳng x = 0 (trục tung).</div>
                        </div>
                    </div>
                    
                    <div id="calculate-value-solution" class="solution-box">
                        <div class="solution-title">Hướng dẫn giải: Tính giá trị hàm số</div>
                        <div class="solution-content">
                            <div class="solution-step">Để tính giá trị của hàm số y = ax² tại x = x₀, ta thay x₀ vào biểu thức của hàm số.</div>
                            <div class="solution-step">Công thức: f(x₀) = a × (x₀)²</div>
                            <div class="solution-step">Ví dụ: Với hàm số y = ${currentA.toFixed(2)}x², để tính f(2):</div>
                            <div class="solution-step">f(2) = ${currentA.toFixed(2)} × 2² = ${currentA.toFixed(2)} × 4 = ${(currentA * 4).toFixed(2)}</div>
                            <div class="solution-step">Vậy điểm (2, ${(currentA * 4).toFixed(2)}) thuộc đồ thị hàm số.</div>
                        </div>
                    </div>
                    
                    <div id="analyze-variation-solution" class="solution-box">
                        <div class="solution-title">Hướng dẫn giải: Xét tính biến thiên</div>
                        <div class="solution-content">
                            <div class="solution-step">Tính biến thiên của hàm số y = ax² phụ thuộc vào dấu của hệ số a:</div>
                            <div class="solution-step">1. Nếu a > 0 (parabol mở lên):</div>
                            <div class="solution-step">   • Hàm số nghịch biến trên khoảng (-∞, 0)</div>
                            <div class="solution-step">   • Hàm số đồng biến trên khoảng (0, +∞)</div>
                            <div class="solution-step">2. Nếu a < 0 (parabol mở xuống):</div>
                            <div class="solution-step">   • Hàm số đồng biến trên khoảng (-∞, 0)</div>
                            <div class="solution-step">   • Hàm số nghịch biến trên khoảng (0, +∞)</div>
                            <div class="solution-step">Với hàm số hiện tại y = ${currentA.toFixed(2)}x², ${currentA > 0 ? 'a > 0 nên hàm số nghịch biến trên (-∞, 0) và đồng biến trên (0, +∞)' : 'a < 0 nên hàm số đồng biến trên (-∞, 0) và nghịch biến trên (0, +∞)'}.</div>
                        </div>
                    </div>
                    
                    <div id="compare-graph-solution" class="solution-box">
                        <div class="solution-title">Hướng dẫn giải: So sánh đồ thị</div>
                        <div class="solution-content">
                            <div class="solution-step">Khi so sánh các parabol y = a₁x² và y = a₂x²:</div>
                            <div class="solution-step">1. Nếu |a₁| > |a₂|: Parabol thứ nhất hẹp hơn parabol thứ hai.</div>
                            <div class="solution-step">2. Nếu |a₁| < |a₂|: Parabol thứ nhất rộng hơn parabol thứ hai.</div>
                            <div class="solution-step">3. Nếu a₁ và a₂ cùng dấu: Hai parabol cùng hướng mở (cùng mở lên hoặc cùng mở xuống).</div>
                            <div class="solution-step">4. Nếu a₁ và a₂ trái dấu: Hai parabol mở ngược hướng nhau.</div>
                            <div class="solution-step">5. Tất cả các parabol dạng y = ax² đều có chung đỉnh O(0,0) và trục đối xứng x = 0.</div>
                        </div>
                    </div>
                    
                    <div id="custom-solution" class="solution-box">
                        <div class="solution-title">Giải bài toán tùy chỉnh</div>
                        <div class="solution-content" id="customSolutionContent">
                            Nhập bài toán vào ô "Giải bài toán tùy chỉnh" và nhấn nút "GIẢI BÀI TOÁN" để xem lời giải.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="algorithm-box">
                <div class="panel-title">THUẬT TOÁN VẼ ĐỒ THỊ HÀM SỐ y = ax²</div>
                
                <div class="algorithm-steps">
                    <div class="algorithm-step">
                        <strong>Bước 1:</strong> Xác định hệ số a (a ≠ 0) và miền giá trị x cần khảo sát.
                    </div>
                    
                    <div class="algorithm-step">
                        <strong>Bước 2:</strong> Chia đoạn [-R, R] thành n điểm cách đều (n lẻ để có điểm tại x = 0).
                    </div>
                    
                    <div class="algorithm-step">
                        <strong>Bước 3:</strong> Tính giá trị y tương ứng với mỗi x theo công thức y = ax².
                    </div>
                    
                    <div class="algorithm-step">
                        <strong>Bước 4:</strong> Vẽ hệ trục tọa độ Oxy với tỉ lệ thích hợp.
                    </div>
                    
                    <div class="algorithm-step">
                        <strong>Bước 5:</strong> Đánh dấu các điểm (x, y) đã tính được lên hệ trục tọa độ.
                    </div>
                    
                    <div class="algorithm-step">
                        <strong>Bước 6:</strong> Nối các điểm bằng một đường cong mượt để được parabol.
                    </div>
                    
                    <div class="algorithm-step">
                        <strong>Bước 7:</strong> Đánh dấu đỉnh O(0,0) và vẽ trục đối xứng x = 0.
                    </div>
                    
                    <div class="algorithm-step">
                        <strong>Bước 8:</strong> Ghi chú các thông tin quan trọng: phương trình hàm số, đỉnh, trục đối xứng.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <div>PHẦN MỀM HỖ TRỢ HỌC TẬP: HÀM SỐ y = ax²</div>
            <div style="margin-top: 8px;"> Nguyễn Tấn Tài</div>
        </div>
    </div>
</body>
</html>