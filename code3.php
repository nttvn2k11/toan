<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Bất Đẳng Thức & Bất Phương Trình</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
            color: #000000;
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
            text-align: center;
            background: #ffffff;
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
        
        .type-selector {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 12px;
            margin-bottom: 30px;
        }
        
        .type-btn {
            padding: 14px 8px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            background: #ffffff;
            color: #000000;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
            font-size: 14px;
        }
        
        .type-btn:hover {
            background: #f0f8ff;
            border-color: #0066cc;
        }
        
        .type-btn.active {
            background: #0066cc;
            color: white;
            border-color: #0066cc;
        }
        
        .input-section {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            border: 1px solid #e0e0e0;
        }
        
        .input-section h2 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #000000;
            padding-bottom: 10px;
            border-bottom: 2px solid #0066cc;
        }
        
        .inequality-display {
            font-family: 'Courier New', monospace;
            font-size: 20px;
            text-align: center;
            margin: 20px 0;
            padding: 15px;
            background: white;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            color: #000000;
            line-height: 1.8;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .input-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }
        
        .input-group {
            text-align: center;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333333;
            font-size: 14px;
        }
        
        .input-group input, .input-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            background: #ffffff;
            color: #000000;
            font-size: 14px;
            text-align: center;
        }
        
        .input-group input:focus, .input-group select:focus {
            outline: none;
            border-color: #0066cc;
            box-shadow: 0 0 0 2px rgba(0, 102, 204, 0.1);
        }
        
        .operator-selector {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }
        
        .operator-btn {
            padding: 10px 20px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            background: white;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s;
            min-width: 60px;
        }
        
        .operator-btn:hover {
            background: #f0f0f0;
        }
        
        .operator-btn.active {
            background: #0066cc;
            color: white;
            border-color: #0066cc;
        }
        
        .button-group {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 25px;
        }
        
        .btn {
            padding: 15px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            font-size: 15px;
            transition: all 0.3s;
            text-align: center;
        }
        
        .btn-solve {
            background: #0066cc;
            color: white;
        }
        
        .btn-solve:hover {
            background: #0055aa;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.2);
        }
        
        .btn-example {
            background: #009933;
            color: white;
        }
        
        .btn-example:hover {
            background: #008822;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 153, 51, 0.2);
        }
        
        .btn-clear {
            background: #ff6600;
            color: white;
        }
        
        .btn-clear:hover {
            background: #e65500;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 102, 0, 0.2);
        }
        
        .btn-random {
            background: #6633cc;
            color: white;
        }
        
        .btn-random:hover {
            background: #5522bb;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 51, 204, 0.2);
        }
        
        .result-section {
            background: white;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            border: 1px solid #e0e0e0;
            display: none;
        }
        
        .result-section.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .result-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #0066cc;
        }
        
        .result-header h2 {
            font-size: 22px;
            color: #000000;
        }
        
        .type-indicator {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            background: #0066cc;
            color: white;
        }
        
        .steps-container {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
        }
        
        .step {
            margin: 12px 0;
            padding: 12px 15px;
            background: white;
            border-radius: 6px;
            border-left: 4px solid #0066cc;
            font-size: 15px;
            line-height: 1.6;
        }
        
        .step-number {
            font-weight: 700;
            color: #0066cc;
            margin-right: 10px;
        }
        
        .solution-container {
            margin: 25px 0;
        }
        
        .solution-box {
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            font-family: 'Courier New', monospace;
            font-size: 18px;
            font-weight: bold;
            background: #e6f2ff;
            color: #0066cc;
            border: 2px solid #0066cc;
            margin-bottom: 15px;
        }
        
        .interval-display {
            font-size: 20px;
            font-weight: bold;
            color: #0066cc;
            margin: 15px 0;
            padding: 10px;
            background: #f0f8ff;
            border-radius: 6px;
        }
        
        .number-line {
            height: 40px;
            background: #f0f0f0;
            border-radius: 4px;
            position: relative;
            margin: 25px 0;
            overflow: hidden;
        }
        
        .number-line-fill {
            height: 100%;
            background: #0066cc;
            position: absolute;
            opacity: 0.3;
        }
        
        .number-line-ticks {
            display: flex;
            justify-content: space-between;
            position: relative;
            top: -40px;
            height: 40px;
            align-items: center;
            padding: 0 20px;
        }
        
        .tick {
            width: 2px;
            height: 10px;
            background: #333;
        }
        
        .tick-label {
            position: absolute;
            top: 25px;
            font-size: 12px;
            color: #333;
        }
        
        .analysis-container {
            margin-top: 25px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
        }
        
        .analysis-container h3 {
            color: #000000;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        .analysis-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
        }
        
        .analysis-item {
            padding: 12px;
            background: white;
            border-radius: 6px;
            border-left: 4px solid #0066cc;
        }
        
        .analysis-label {
            font-weight: 600;
            color: #666;
            margin-bottom: 5px;
            font-size: 13px;
        }
        
        .analysis-value {
            font-size: 15px;
            color: #000000;
        }
        
        .condition-box {
            padding: 15px;
            background: #e6f7e9;
            border-radius: 6px;
            margin: 15px 0;
            border: 1px solid #009933;
        }
        
        .condition-box h4 {
            color: #009933;
            margin-bottom: 10px;
        }
        
        .method-explanation {
            padding: 20px;
            background: #e6f2ff;
            border-radius: 8px;
            margin: 20px 0;
        }
        
        .method-explanation h4 {
            color: #0066cc;
            margin-bottom: 10px;
            font-size: 16px;
        }
        
        .method-explanation p {
            margin-bottom: 8px;
            font-size: 14px;
            line-height: 1.5;
        }
        
        .graph-container {
            height: 60px;
            background: #f9f9f9;
            border-radius: 6px;
            margin: 20px 0;
            position: relative;
            border: 1px solid #e0e0e0;
        }
        
        .graph-line {
            height: 2px;
            background: #333;
            width: 90%;
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
        }
        
        .graph-arrow {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 8px solid #333;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
        }
        
        .graph-point {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #0066cc;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }
        
        .graph-interval {
            height: 10px;
            background: #0066cc;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.3;
        }
        
        footer {
            padding: 20px;
            border-top: 1px solid #e0e0e0;
            text-align: center;
            background: #ffffff;
            font-size: 14px;
            color: #666666;
        }
        
        .hidden {
            display: none;
        }
        
        @media (max-width: 1200px) {
            .type-selector {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .button-group {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .type-selector {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .button-group {
                grid-template-columns: 1fr;
            }
            
            .input-grid {
                grid-template-columns: 1fr;
            }
            
            .inequality-display {
                font-size: 18px;
                padding: 10px;
            }
            
            .operator-selector {
                flex-wrap: wrap;
            }
        }
        
        @media (max-width: 480px) {
            .type-selector {
                grid-template-columns: 1fr;
            }
            
            .result-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="flex items-center space-x-3">
            
            <button onclick="window.print()" class="p-2.5 bg-gray-50 hover:bg-gray-200 rounded-xl transition-all" title="In đề thi">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9V2h12v7M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2m-2 4H8v-4h8v4z"/></svg>
            </button>
        </div>
    <div class="container">
        <div class="header">
            <div class="main-title">Giải Bất Đẳng Thức & Bất Phương Trình</div>
            <div class="subtitle">Công cụ giải các dạng bất đẳng thức và bất phương trình chứa căn thức</div>
        </div>
        
        <div class="content">
            <div class="type-selector">
                <button class="type-btn active" data-type="linear">Bất phương trình bậc nhất</button>
                <button class="type-btn" data-type="quadratic">Bất phương trình bậc hai</button>
                <button class="type-btn" data-type="sqrt-linear">Bất phương trình chứa √(ax+b)</button>
                <button class="type-btn" data-type="sqrt-quadratic">Bất phương trình chứa √(ax²+bx+c)</button>
                <button class="type-btn" data-type="cubic-root">Bất phương trình chứa ³√</button>
            </div>
            
            <!-- Bất phương trình bậc nhất -->
            <div class="input-section" id="linear-section">
                <h2>Bất phương trình bậc nhất một ẩn</h2>
                <div class="inequality-display" id="linear-equation">
                    2x + 3 > 0
                </div>
                
                <div class="input-grid">
                    <div class="input-group">
                        <label for="linear-a">Hệ số a</label>
                        <input type="number" id="linear-a" step="any" value="2">
                    </div>
                    
                    <div class="input-group">
                        <label for="linear-b">Hệ số b</label>
                        <input type="number" id="linear-b" step="any" value="3">
                    </div>
                    
                    <div class="input-group">
                        <label for="linear-c">Hằng số c</label>
                        <input type="number" id="linear-c" step="any" value="0">
                    </div>
                </div>
                
                <div class="operator-selector">
                    <button class="operator-btn active" data-op=">">&gt;</button>
                    <button class="operator-btn" data-op=">=">≥</button>
                    <button class="operator-btn" data-op="<">&lt;</button>
                    <button class="operator-btn" data-op="<=">≤</button>
                </div>
                
                <div class="button-group">
                    <button class="btn btn-solve" onclick="solveLinearInequality()">Giải bất phương trình</button>
                    <button class="btn btn-example" onclick="generateLinearExample()">Ví dụ ngẫu nhiên</button>
                    <button class="btn btn-clear" onclick="clearLinear()">Xóa hệ số</button>
                    <button class="btn btn-random" onclick="generateRandomExample()">Bài tập mới</button>
                </div>
            </div>
            
            <!-- Bất phương trình bậc hai -->
            <div class="input-section hidden" id="quadratic-section">
                <h2>Bất phương trình bậc hai một ẩn</h2>
                <div class="inequality-display" id="quadratic-equation">
                    x² - 3x + 2 > 0
                </div>
                
                <div class="input-grid">
                    <div class="input-group">
                        <label for="quadratic-a">Hệ số a (≠ 0)</label>
                        <input type="number" id="quadratic-a" step="any" value="1">
                    </div>
                    
                    <div class="input-group">
                        <label for="quadratic-b">Hệ số b</label>
                        <input type="number" id="quadratic-b" step="any" value="-3">
                    </div>
                    
                    <div class="input-group">
                        <label for="quadratic-c">Hệ số c</label>
                        <input type="number" id="quadratic-c" step="any" value="2">
                    </div>
                </div>
                
                <div class="operator-selector">
                    <button class="operator-btn active" data-op=">">&gt;</button>
                    <button class="operator-btn" data-op=">=">≥</button>
                    <button class="operator-btn" data-op="<">&lt;</button>
                    <button class="operator-btn" data-op="<=">≤</button>
                </div>
                
                <div class="button-group">
                    <button class="btn btn-solve" onclick="solveQuadraticInequality()">Giải bất phương trình</button>
                    <button class="btn btn-example" onclick="generateQuadraticExample()">Ví dụ ngẫu nhiên</button>
                    <button class="btn btn-clear" onclick="clearQuadratic()">Xóa hệ số</button>
                </div>
            </div>
            
            <!-- Bất phương trình chứa √(ax+b) -->
            <div class="input-section hidden" id="sqrt-linear-section">
                <h2>Bất phương trình chứa căn thức: √(ax + b)</h2>
                <div class="inequality-display" id="sqrt-linear-equation">
                    √(2x + 1) > 3
                </div>
                
                <div class="input-grid">
                    <div class="input-group">
                        <label for="sqrt-a">Hệ số a (trong căn)</label>
                        <input type="number" id="sqrt-a" step="any" value="2">
                    </div>
                    
                    <div class="input-group">
                        <label for="sqrt-b">Hệ số b (trong căn)</label>
                        <input type="number" id="sqrt-b" step="any" value="1">
                    </div>
                    
                    <div class="input-group">
                        <label for="sqrt-c">Hệ số c (ngoài căn)</label>
                        <input type="number" id="sqrt-c" step="any" value="1">
                    </div>
                    
                    <div class="input-group">
                        <label for="sqrt-d">Hệ số d (ngoài căn)</label>
                        <input type="number" id="sqrt-d" step="any" value="3">
                    </div>
                </div>
                
                <div class="operator-selector">
                    <button class="operator-btn active" data-op=">">&gt;</button>
                    <button class="operator-btn" data-op=">=">≥</button>
                    <button class="operator-btn" data-op="<">&lt;</button>
                    <button class="operator-btn" data-op="<=">≤</button>
                </div>
                
                <div class="method-explanation">
                    <h4>Phương pháp giải:</h4>
                    <p>1. Tìm điều kiện xác định: ax + b ≥ 0</p>
                    <p>2. Xét hai trường hợp của vế phải:</p>
                    <p>   - Nếu vế phải âm: so sánh trực tiếp</p>
                    <p>   - Nếu vế phải không âm: bình phương hai vế</p>
                    <p>3. Kết hợp nghiệm với điều kiện</p>
                </div>
                
                <div class="button-group">
                    <button class="btn btn-solve" onclick="solveSqrtLinear()">Giải bất phương trình</button>
                    <button class="btn btn-example" onclick="generateSqrtLinearExample()">Ví dụ ngẫu nhiên</button>
                    <button class="btn btn-clear" onclick="clearSqrtLinear()">Xóa hệ số</button>
                </div>
            </div>
            
            <!-- Bất phương trình chứa √(ax²+bx+c) -->
            <div class="input-section hidden" id="sqrt-quadratic-section">
                <h2>Bất phương trình chứa căn thức: √(ax² + bx + c)</h2>
                <div class="inequality-display" id="sqrt-quadratic-equation">
                    √(x² - 4) ≤ 3
                </div>
                
                <div class="input-grid">
                    <div class="input-group">
                        <label for="sqrt2-a">Hệ số a (trong căn)</label>
                        <input type="number" id="sqrt2-a" step="any" value="1">
                    </div>
                    
                    <div class="input-group">
                        <label for="sqrt2-b">Hệ số b (trong căn)</label>
                        <input type="number" id="sqrt2-b" step="any" value="0">
                    </div>
                    
                    <div class="input-group">
                        <label for="sqrt2-c">Hệ số c (trong căn)</label>
                        <input type="number" id="sqrt2-c" step="any" value="-4">
                    </div>
                    
                    <div class="input-group">
                        <label for="sqrt2-d">Hệ số d (ngoài căn)</label>
                        <input type="number" id="sqrt2-d" step="any" value="3">
                    </div>
                </div>
                
                <div class="operator-selector">
                    <button class="operator-btn active" data-op=">">&gt;</button>
                    <button class="operator-btn" data-op=">=">≥</button>
                    <button class="operator-btn" data-op="<">&lt;</button>
                    <button class="operator-btn" data-op="<=">≤</button>
                </div>
                
                <div class="method-explanation">
                    <h4>Phương pháp giải:</h4>
                    <p>1. Tìm điều kiện xác định: ax² + bx + c ≥ 0</p>
                    <p>2. Xét dấu của vế phải:</p>
                    <p>   - Nếu vế phải âm: vô nghiệm (vì căn luôn ≥ 0)</p>
                    <p>   - Nếu vế phải không âm: bình phương hai vế</p>
                    <p>3. Giải hệ bất phương trình và kết hợp nghiệm</p>
                </div>
                
                <div class="button-group">
                    <button class="btn btn-solve" onclick="solveSqrtQuadratic()">Giải bất phương trình</button>
                    <button class="btn btn-example" onclick="generateSqrtQuadraticExample()">Ví dụ ngẫu nhiên</button>
                    <button class="btn btn-clear" onclick="clearSqrtQuadratic()">Xóa hệ số</button>
                </div>
            </div>
            
            <!-- Bất phương trình chứa căn bậc ba -->
            <div class="input-section hidden" id="cubic-root-section">
                <h2>Bất phương trình chứa căn bậc ba: ³√(ax + b)</h2>
                <div class="inequality-display" id="cubic-root-equation">
                    ³√(2x + 1) > 1
                </div>
                
                <div class="input-grid">
                    <div class="input-group">
                        <label for="cubic-a">Hệ số a (trong căn)</label>
                        <input type="number" id="cubic-a" step="any" value="2">
                    </div>
                    
                    <div class="input-group">
                        <label for="cubic-b">Hệ số b (trong căn)</label>
                        <input type="number" id="cubic-b" step="any" value="1">
                    </div>
                    
                    <div class="input-group">
                        <label for="cubic-c">Hệ số c (ngoài căn)</label>
                        <input type="number" id="cubic-c" step="any" value="1">
                    </div>
                    
                    <div class="input-group">
                        <label for="cubic-d">Hệ số d (ngoài căn)</label>
                        <input type="number" id="cubic-d" step="any" value="1">
                    </div>
                </div>
                
                <div class="operator-selector">
                    <button class="operator-btn active" data-op=">">&gt;</button>
                    <button class="operator-btn" data-op=">=">≥</button>
                    <button class="operator-btn" data-op="<">&lt;</button>
                    <button class="operator-btn" data-op="<=">≤</button>
                </div>
                
                <div class="method-explanation">
                    <h4>Phương pháp giải:</h4>
                    <p>1. Căn bậc ba xác định với mọi số thực (không cần điều kiện)</p>
                    <p>2. Lập phương hai vế để loại bỏ căn bậc ba</p>
                    <p>3. Giải bất phương trình đại số thu được</p>
                </div>
                
                <div class="button-group">
                    <button class="btn btn-solve" onclick="solveCubicRoot()">Giải bất phương trình</button>
                    <button class="btn btn-example" onclick="generateCubicRootExample()">Ví dụ ngẫu nhiên</button>
                    <button class="btn btn-clear" onclick="clearCubicRoot()">Xóa hệ số</button>
                </div>
            </div>
            
            <!-- Kết quả -->
            <div class="result-section" id="resultSection">
                <div class="result-header">
                    <h2 id="resultTitle">Kết Quả Giải</h2>
                    <div class="type-indicator" id="typeIndicator">Bất phương trình bậc nhất</div>
                </div>
                
                <div class="steps-container" id="stepsContainer">
                    <!-- Các bước giải sẽ được thêm vào đây -->
                </div>
                
                <div class="solution-container" id="solutionContainer">
                    <!-- Nghiệm sẽ được thêm vào đây -->
                </div>
                
                <div class="analysis-container" id="analysisContainer">
                    <h3>Phân Tích Kết Quả</h3>
                    <div class="analysis-grid" id="analysisGrid">
                        <!-- Phân tích sẽ được thêm vào đây -->
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <div>Phần mềm giải bất đẳng thức và bất phương trình chứa căn thức</div>
            <div style="margin-top: 8px;">Hỗ trợ đa dạng các dạng từ cơ bản đến nâng cao</div>
        </footer>
    </div>

    <script>
        // Biến toàn cục
        let currentType = 'linear';
        let currentOperator = '>';
        
        // Hàm định dạng số
        function formatNumber(num) {
            if (isNaN(num) || !isFinite(num)) return 'Không xác định';
            
            const rounded = Math.round(num * 10000) / 10000;
            return parseFloat(rounded.toFixed(4)).toString();
        }
        
        // Hàm chuyển đổi loại bài toán
        function switchType(type) {
            currentType = type;
            
            // Ẩn tất cả các section
            document.getElementById('linear-section').classList.add('hidden');
            document.getElementById('quadratic-section').classList.add('hidden');
            document.getElementById('sqrt-linear-section').classList.add('hidden');
            document.getElementById('sqrt-quadratic-section').classList.add('hidden');
            document.getElementById('cubic-root-section').classList.add('hidden');
            
            // Hiển thị section được chọn
            document.getElementById(type + '-section').classList.remove('hidden');
            
            // Cập nhật nút active
            document.querySelectorAll('.type-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.type === type) {
                    btn.classList.add('active');
                }
            });
            
            // Cập nhật toán tử
            updateOperatorButtons();
            
            // Cập nhật hiển thị phương trình
            updateEquationDisplay();
            
            // Ẩn kết quả cũ
            document.getElementById('resultSection').classList.remove('show');
        }
        
        // Hàm cập nhật toán tử
        function updateOperatorButtons() {
            document.querySelectorAll('.operator-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.op === currentOperator) {
                    btn.classList.add('active');
                }
            });
        }
        
        // Hàm thay đổi toán tử
        function changeOperator(op) {
            currentOperator = op;
            updateOperatorButtons();
            updateEquationDisplay();
        }
        
        // ========== HÀM CẬP NHẬT HIỂN THỊ PHƯƠNG TRÌNH ==========
        
        function updateEquationDisplay() {
            switch(currentType) {
                case 'linear':
                    updateLinearEquation();
                    break;
                case 'quadratic':
                    updateQuadraticEquation();
                    break;
                case 'sqrt-linear':
                    updateSqrtLinearEquation();
                    break;
                case 'sqrt-quadratic':
                    updateSqrtQuadraticEquation();
                    break;
                case 'cubic-root':
                    updateCubicRootEquation();
                    break;
            }
        }
        
        function updateLinearEquation() {
            const a = parseFloat(document.getElementById('linear-a').value) || 0;
            const b = parseFloat(document.getElementById('linear-b').value) || 0;
            const c = parseFloat(document.getElementById('linear-c').value) || 0;
            
            let left = '';
            if (a !== 0) {
                left += (a === 1 ? '' : a === -1 ? '-' : formatNumber(a)) + 'x';
                if (b !== 0) {
                    left += (b > 0 ? ' + ' : ' - ') + formatNumber(Math.abs(b));
                }
            } else {
                left = formatNumber(b);
            }
            
            if (c !== 0) {
                left += ' - ' + formatNumber(c);
            }
            
            document.getElementById('linear-equation').textContent = `${left} ${currentOperator} 0`;
        }
        
        function updateQuadraticEquation() {
            const a = parseFloat(document.getElementById('quadratic-a').value) || 0;
            const b = parseFloat(document.getElementById('quadratic-b').value) || 0;
            const c = parseFloat(document.getElementById('quadratic-c').value) || 0;
            
            let eq = '';
            if (a !== 0) {
                eq += (a === 1 ? '' : a === -1 ? '-' : formatNumber(a)) + 'x²';
            }
            
            if (b !== 0) {
                const sign = b > 0 ? ' + ' : ' - ';
                eq += sign + (Math.abs(b) === 1 ? '' : formatNumber(Math.abs(b))) + 'x';
            }
            
            if (c !== 0) {
                const sign = c > 0 ? ' + ' : ' - ';
                eq += sign + formatNumber(Math.abs(c));
            }
            
            eq = eq.replace(/^\+ /, '').replace(/^\-\s?/, '-');
            if (eq === '' || eq === '-') eq = '0';
            
            document.getElementById('quadratic-equation').textContent = `${eq} ${currentOperator} 0`;
        }
        
        function updateSqrtLinearEquation() {
            const a = parseFloat(document.getElementById('sqrt-a').value) || 0;
            const b = parseFloat(document.getElementById('sqrt-b').value) || 0;
            const c = parseFloat(document.getElementById('sqrt-c').value) || 0;
            const d = parseFloat(document.getElementById('sqrt-d').value) || 0;
            
            let sqrtPart = '';
            if (a !== 0) {
                sqrtPart += (a === 1 ? '' : a === -1 ? '-' : formatNumber(a)) + 'x';
                if (b !== 0) {
                    sqrtPart += (b > 0 ? ' + ' : ' - ') + formatNumber(Math.abs(b));
                }
            } else {
                sqrtPart = formatNumber(b);
            }
            
            let rightPart = '';
            if (c !== 0) {
                rightPart += (c === 1 ? '' : c === -1 ? '-' : formatNumber(c)) + 'x';
                if (d !== 0) {
                    rightPart += (d > 0 ? ' + ' : ' - ') + formatNumber(Math.abs(d));
                }
            } else {
                rightPart = formatNumber(d);
            }
            
            document.getElementById('sqrt-linear-equation').textContent = `√(${sqrtPart}) ${currentOperator} ${rightPart}`;
        }
        
        function updateSqrtQuadraticEquation() {
            const a = parseFloat(document.getElementById('sqrt2-a').value) || 0;
            const b = parseFloat(document.getElementById('sqrt2-b').value) || 0;
            const c = parseFloat(document.getElementById('sqrt2-c').value) || 0;
            const d = parseFloat(document.getElementById('sqrt2-d').value) || 0;
            
            let sqrtPart = '';
            if (a !== 0) {
                sqrtPart += (a === 1 ? '' : a === -1 ? '-' : formatNumber(a)) + 'x²';
            }
            
            if (b !== 0) {
                const sign = b > 0 ? ' + ' : ' - ';
                sqrtPart += sign + (Math.abs(b) === 1 ? '' : formatNumber(Math.abs(b))) + 'x';
            }
            
            if (c !== 0) {
                const sign = c > 0 ? ' + ' : ' - ';
                sqrtPart += sign + formatNumber(Math.abs(c));
            }
            
            sqrtPart = sqrtPart.replace(/^\+ /, '').replace(/^\-\s?/, '-');
            if (sqrtPart === '' || sqrtPart === '-') sqrtPart = '0';
            
            document.getElementById('sqrt-quadratic-equation').textContent = `√(${sqrtPart}) ${currentOperator} ${formatNumber(d)}`;
        }
        
        function updateCubicRootEquation() {
            const a = parseFloat(document.getElementById('cubic-a').value) || 0;
            const b = parseFloat(document.getElementById('cubic-b').value) || 0;
            const c = parseFloat(document.getElementById('cubic-c').value) || 0;
            const d = parseFloat(document.getElementById('cubic-d').value) || 0;
            
            let sqrtPart = '';
            if (a !== 0) {
                sqrtPart += (a === 1 ? '' : a === -1 ? '-' : formatNumber(a)) + 'x';
                if (b !== 0) {
                    sqrtPart += (b > 0 ? ' + ' : ' - ') + formatNumber(Math.abs(b));
                }
            } else {
                sqrtPart = formatNumber(b);
            }
            
            let rightPart = '';
            if (c !== 0) {
                rightPart += (c === 1 ? '' : c === -1 ? '-' : formatNumber(c)) + 'x';
                if (d !== 0) {
                    rightPart += (d > 0 ? ' + ' : ' - ') + formatNumber(Math.abs(d));
                }
            } else {
                rightPart = formatNumber(d);
            }
            
            document.getElementById('cubic-root-equation').textContent = `³√(${sqrtPart}) ${currentOperator} ${rightPart}`;
        }
        
        // ========== HÀM HIỂN THỊ KẾT QUẢ ==========
        
        function displayResult(result) {
            const resultSection = document.getElementById('resultSection');
            const stepsContainer = document.getElementById('stepsContainer');
            const solutionContainer = document.getElementById('solutionContainer');
            const analysisGrid = document.getElementById('analysisGrid');
            const typeIndicator = document.getElementById('typeIndicator');
            const resultTitle = document.getElementById('resultTitle');
            
            // Cập nhật tiêu đề
            resultTitle.textContent = 'Kết Quả Giải';
            typeIndicator.textContent = getTypeName(currentType);
            
            // Hiển thị section kết quả
            resultSection.classList.add('show');
            
            // Hiển thị các bước giải
            stepsContainer.innerHTML = '<h3>Chi Tiết Giải:</h3>';
            if (result.steps && result.steps.length > 0) {
                result.steps.forEach((step, index) => {
                    const stepElement = document.createElement('div');
                    stepElement.className = 'step';
                    stepElement.innerHTML = `<span class="step-number">Bước ${index + 1}:</span> ${step}`;
                    stepsContainer.appendChild(stepElement);
                });
            }
            
            // Hiển thị nghiệm
            solutionContainer.innerHTML = '<h3>Tập Nghiệm:</h3>';
            
            if (result.solution) {
                const solutionBox = document.createElement('div');
                solutionBox.className = 'solution-box';
                solutionBox.textContent = result.solution;
                solutionContainer.appendChild(solutionBox);
            }
            
            // Hiển thị khoảng nghiệm dưới dạng trục số
            if (result.interval) {
                const intervalDisplay = document.createElement('div');
                intervalDisplay.className = 'interval-display';
                intervalDisplay.textContent = `Khoảng nghiệm: ${result.interval}`;
                solutionContainer.appendChild(intervalDisplay);
                
                // Vẽ trục số
                if (result.min !== undefined && result.max !== undefined) {
                    drawNumberLine(result.min, result.max, result.includeMin, result.includeMax);
                }
            }
            
            // Hiển thị phân tích
            analysisGrid.innerHTML = '';
            if (result.analysis && result.analysis.length > 0) {
                result.analysis.forEach(item => {
                    const parts = item.split(': ');
                    if (parts.length === 2) {
                        const analysisItem = document.createElement('div');
                        analysisItem.className = 'analysis-item';
                        analysisItem.innerHTML = `
                            <div class="analysis-label">${parts[0]}</div>
                            <div class="analysis-value">${parts[1]}</div>
                        `;
                        analysisGrid.appendChild(analysisItem);
                    }
                });
            }
            
            // Cuộn đến kết quả
            resultSection.scrollIntoView({ behavior: 'smooth' });
        }
        
        // Hàm vẽ trục số
        function drawNumberLine(min, max, includeMin = false, includeMax = false) {
            const graphContainer = document.createElement('div');
            graphContainer.className = 'graph-container';
            graphContainer.innerHTML = `
                <div class="graph-line"></div>
                <div class="graph-arrow"></div>
            `;
            
            // Tính vị trí tương đối
            const range = Math.max(Math.abs(min), Math.abs(max)) * 2 || 10;
            const offset = 5; // 5% offset
            
            if (min !== -Infinity && max !== Infinity) {
                const leftPercent = ((min + range) / (2 * range)) * 90 + offset;
                const rightPercent = ((max + range) / (2 * range)) * 90 + offset;
                const widthPercent = rightPercent - leftPercent;
                
                const interval = document.createElement('div');
                interval.className = 'graph-interval';
                interval.style.left = `${leftPercent}%`;
                interval.style.width = `${widthPercent}%`;
                graphContainer.appendChild(interval);
                
                // Điểm min
                const pointMin = document.createElement('div');
                pointMin.className = 'graph-point';
                pointMin.style.left = `${leftPercent}%`;
                pointMin.style.backgroundColor = includeMin ? '#0066cc' : '#ffffff';
                pointMin.style.border = includeMin ? 'none' : '2px solid #0066cc';
                graphContainer.appendChild(pointMin);
                
                // Điểm max
                const pointMax = document.createElement('div');
                pointMax.className = 'graph-point';
                pointMax.style.left = `${rightPercent}%`;
                pointMax.style.backgroundColor = includeMax ? '#0066cc' : '#ffffff';
                pointMax.style.border = includeMax ? 'none' : '2px solid #0066cc';
                graphContainer.appendChild(pointMax);
                
                // Nhãn min
                const labelMin = document.createElement('div');
                labelMin.className = 'tick-label';
                labelMin.textContent = formatNumber(min);
                labelMin.style.left = `${leftPercent}%`;
                labelMin.style.transform = 'translateX(-50%)';
                labelMin.style.top = '45px';
                graphContainer.appendChild(labelMin);
                
                // Nhãn max
                const labelMax = document.createElement('div');
                labelMax.className = 'tick-label';
                labelMax.textContent = formatNumber(max);
                labelMax.style.left = `${rightPercent}%`;
                labelMax.style.transform = 'translateX(-50%)';
                labelMax.style.top = '45px';
                graphContainer.appendChild(labelMax);
            }
            
            document.getElementById('solutionContainer').appendChild(graphContainer);
        }
        
        // Hàm lấy tên loại
        function getTypeName(type) {
            switch(type) {
                case 'linear': return 'Bất phương trình bậc nhất';
                case 'quadratic': return 'Bất phương trình bậc hai';
                case 'sqrt-linear': return 'Bất phương trình chứa căn bậc 2';
                case 'sqrt-quadratic': return 'Bất phương trình chứa căn bậc 2 (bậc 2)';
                case 'cubic-root': return 'Bất phương trình chứa căn bậc 3';
                default: return 'Bất phương trình';
            }
        }
        
        // ========== HÀM GIẢI BẤT PHƯƠNG TRÌNH ==========
        
        // 1. Bất phương trình bậc nhất
        function solveLinearInequality() {
            const a = parseFloat(document.getElementById('linear-a').value) || 0;
            const b = parseFloat(document.getElementById('linear-b').value) || 0;
            const c = parseFloat(document.getElementById('linear-c').value) || 0;
            
            const result = {
                steps: [],
                solution: '',
                interval: '',
                analysis: []
            };
            
            result.steps.push(`Bất phương trình: ${a !== 0 ? formatNumber(a) + 'x' : ''}${b >= 0 ? ' + ' : ' - '}${formatNumber(Math.abs(b))} - ${formatNumber(c)} ${currentOperator} 0`);
            
            if (a === 0) {
                // Trường hợp a = 0
                const constant = b - c;
                result.steps.push(`Thu gọn: ${formatNumber(constant)} ${currentOperator} 0`);
                
                let solution;
                switch(currentOperator) {
                    case '>':
                        solution = constant > 0 ? '∀x ∈ ℝ' : '∅ (vô nghiệm)';
                        break;
                    case '>=':
                        solution = constant >= 0 ? '∀x ∈ ℝ' : '∅ (vô nghiệm)';
                        break;
                    case '<':
                        solution = constant < 0 ? '∀x ∈ ℝ' : '∅ (vô nghiệm)';
                        break;
                    case '<=':
                        solution = constant <= 0 ? '∀x ∈ ℝ' : '∅ (vô nghiệm)';
                        break;
                }
                
                result.solution = solution;
                result.analysis.push(`a = 0: phương trình trở thành hằng số`);
                result.analysis.push(`Kết quả: ${solution}`);
                
            } else {
                // Trường hợp a ≠ 0
                const x = (c - b) / a;
                result.steps.push(`Chuyển vế: ${formatNumber(a)}x ${currentOperator} ${formatNumber(b - c)}`);
                result.steps.push(`Chia hai vế cho ${formatNumber(a)}`);
                
                let solution, interval, includeMin, includeMax;
                
                if (a > 0) {
                    switch(currentOperator) {
                        case '>':
                            solution = `x > ${formatNumber(x)}`;
                            interval = `(${formatNumber(x)}, +∞)`;
                            break;
                        case '>=':
                            solution = `x ≥ ${formatNumber(x)}`;
                            interval = `[${formatNumber(x)}, +∞)`;
                            break;
                        case '<':
                            solution = `x < ${formatNumber(x)}`;
                            interval = `(-∞, ${formatNumber(x)})`;
                            break;
                        case '<=':
                            solution = `x ≤ ${formatNumber(x)}`;
                            interval = `(-∞, ${formatNumber(x)}]`;
                            break;
                    }
                } else {
                    // a < 0, đổi chiều bất đẳng thức
                    switch(currentOperator) {
                        case '>':
                            solution = `x < ${formatNumber(x)}`;
                            interval = `(-∞, ${formatNumber(x)})`;
                            break;
                        case '>=':
                            solution = `x ≤ ${formatNumber(x)}`;
                            interval = `(-∞, ${formatNumber(x)}]`;
                            break;
                        case '<':
                            solution = `x > ${formatNumber(x)}`;
                            interval = `(${formatNumber(x)}, +∞)`;
                            break;
                        case '<=':
                            solution = `x ≥ ${formatNumber(x)}`;
                            interval = `[${formatNumber(x)}, +∞)`;
                            break;
                    }
                }
                
                result.solution = solution;
                result.interval = interval;
                result.min = currentOperator.includes('<') ? -Infinity : x;
                result.max = currentOperator.includes('>') ? Infinity : x;
                result.includeMin = currentOperator.includes('>=');
                result.includeMax = currentOperator.includes('<=');
                
                result.analysis.push(`Nghiệm: x = ${formatNumber(x)}`);
                result.analysis.push(`Hệ số a = ${formatNumber(a)} ${a > 0 ? '> 0' : '< 0'}`);
            }
            
            displayResult(result);
        }
        
        // 2. Bất phương trình bậc hai
        function solveQuadraticInequality() {
            const a = parseFloat(document.getElementById('quadratic-a').value) || 0;
            const b = parseFloat(document.getElementById('quadratic-b').value) || 0;
            const c = parseFloat(document.getElementById('quadratic-c').value) || 0;
            
            const result = {
                steps: [],
                solution: '',
                interval: '',
                analysis: []
            };
            
            result.steps.push(`Bất phương trình: ${formatNumber(a)}x² + ${formatNumber(b)}x + ${formatNumber(c)} ${currentOperator} 0`);
            
            if (a === 0) {
                result.steps.push(`a = 0: đây là bất phương trình bậc nhất`);
                // Chuyển về giải bất phương trình bậc nhất
                const x = -c / b;
                let solution;
                
                if (b > 0) {
                    switch(currentOperator) {
                        case '>': solution = `x > ${formatNumber(x)}`; break;
                        case '>=': solution = `x ≥ ${formatNumber(x)}`; break;
                        case '<': solution = `x < ${formatNumber(x)}`; break;
                        case '<=': solution = `x ≤ ${formatNumber(x)}`; break;
                    }
                } else {
                    switch(currentOperator) {
                        case '>': solution = `x < ${formatNumber(x)}`; break;
                        case '>=': solution = `x ≤ ${formatNumber(x)}`; break;
                        case '<': solution = `x > ${formatNumber(x)}`; break;
                        case '<=': solution = `x ≥ ${formatNumber(x)}`; break;
                    }
                }
                
                result.solution = solution;
                result.analysis.push(`Đây là bất phương trình bậc nhất`);
                result.analysis.push(`Nghiệm: x = ${formatNumber(x)}`);
                
            } else {
                // Tính delta
                const delta = b * b - 4 * a * c;
                result.steps.push(`Δ = b² - 4ac = ${formatNumber(b)}² - 4×${formatNumber(a)}×${formatNumber(c)} = ${formatNumber(delta)}`);
                
                if (delta > 0) {
                    const sqrtDelta = Math.sqrt(delta);
                    const x1 = (-b - sqrtDelta) / (2 * a);
                    const x2 = (-b + sqrtDelta) / (2 * a);
                    const xMin = Math.min(x1, x2);
                    const xMax = Math.max(x1, x2);
                    
                    result.steps.push(`Δ > 0: phương trình có 2 nghiệm phân biệt`);
                    result.steps.push(`x₁ = ${formatNumber(x1)}, x₂ = ${formatNumber(x2)}`);
                    
                    let solution, interval;
                    
                    if (a > 0) {
                        // Parabol mở lên
                        switch(currentOperator) {
                            case '>':
                                solution = `x < ${formatNumber(xMin)} hoặc x > ${formatNumber(xMax)}`;
                                interval = `(-∞, ${formatNumber(xMin)}) ∪ (${formatNumber(xMax)}, +∞)`;
                                break;
                            case '>=':
                                solution = `x ≤ ${formatNumber(xMin)} hoặc x ≥ ${formatNumber(xMax)}`;
                                interval = `(-∞, ${formatNumber(xMin)}] ∪ [${formatNumber(xMax)}, +∞)`;
                                break;
                            case '<':
                                solution = `${formatNumber(xMin)} < x < ${formatNumber(xMax)}`;
                                interval = `(${formatNumber(xMin)}, ${formatNumber(xMax)})`;
                                break;
                            case '<=':
                                solution = `${formatNumber(xMin)} ≤ x ≤ ${formatNumber(xMax)}`;
                                interval = `[${formatNumber(xMin)}, ${formatNumber(xMax)}]`;
                                break;
                        }
                    } else {
                        // Parabol mở xuống
                        switch(currentOperator) {
                            case '>':
                                solution = `${formatNumber(xMin)} < x < ${formatNumber(xMax)}`;
                                interval = `(${formatNumber(xMin)}, ${formatNumber(xMax)})`;
                                break;
                            case '>=':
                                solution = `${formatNumber(xMin)} ≤ x ≤ ${formatNumber(xMax)}`;
                                interval = `[${formatNumber(xMin)}, ${formatNumber(xMax)}]`;
                                break;
                            case '<':
                                solution = `x < ${formatNumber(xMin)} hoặc x > ${formatNumber(xMax)}`;
                                interval = `(-∞, ${formatNumber(xMin)}) ∪ (${formatNumber(xMax)}, +∞)`;
                                break;
                            case '<=':
                                solution = `x ≤ ${formatNumber(xMin)} hoặc x ≥ ${formatNumber(xMax)}`;
                                interval = `(-∞, ${formatNumber(xMin)}] ∪ [${formatNumber(xMax)}, +∞)`;
                                break;
                        }
                    }
                    
                    result.solution = solution;
                    result.interval = interval;
                    result.analysis.push(`Δ = ${formatNumber(delta)} > 0: 2 nghiệm thực phân biệt`);
                    result.analysis.push(`Parabol ${a > 0 ? 'mở lên' : 'mở xuống'}`);
                    
                } else if (delta === 0) {
                    const x = -b / (2 * a);
                    result.steps.push(`Δ = 0: phương trình có nghiệm kép x = ${formatNumber(x)}`);
                    
                    let solution;
                    if (a > 0) {
                        // Parabol mở lên, tiếp xúc trục hoành
                        switch(currentOperator) {
                            case '>':
                                solution = `x ≠ ${formatNumber(x)}`;
                                break;
                            case '>=':
                                solution = `∀x ∈ ℝ`;
                                break;
                            case '<':
                                solution = `∅ (vô nghiệm)`;
                                break;
                            case '<=':
                                solution = `x = ${formatNumber(x)}`;
                                break;
                        }
                    } else {
                        // Parabol mở xuống
                        switch(currentOperator) {
                            case '>':
                                solution = `∅ (vô nghiệm)`;
                                break;
                            case '>=':
                                solution = `x = ${formatNumber(x)}`;
                                break;
                            case '<':
                                solution = `x ≠ ${formatNumber(x)}`;
                                break;
                            case '<=':
                                solution = `∀x ∈ ℝ`;
                                break;
                        }
                    }
                    
                    result.solution = solution;
                    result.analysis.push(`Δ = 0: nghiệm kép x = ${formatNumber(x)}`);
                    result.analysis.push(`Parabol ${a > 0 ? 'mở lên' : 'mở xuống'}`);
                    
                } else {
                    // delta < 0
                    result.steps.push(`Δ < 0: phương trình vô nghiệm thực`);
                    
                    let solution;
                    if (a > 0) {
                        // Parabol mở lên, nằm hoàn toàn phía trên trục hoành
                        switch(currentOperator) {
                            case '>':
                            case '>=':
                                solution = `∀x ∈ ℝ`;
                                break;
                            case '<':
                            case '<=':
                                solution = `∅ (vô nghiệm)`;
                                break;
                        }
                    } else {
                        // Parabol mở xuống, nằm hoàn toàn phía dưới trục hoành
                        switch(currentOperator) {
                            case '>':
                            case '>=':
                                solution = `∅ (vô nghiệm)`;
                                break;
                            case '<':
                            case '<=':
                                solution = `∀x ∈ ℝ`;
                                break;
                        }
                    }
                    
                    result.solution = solution;
                    result.analysis.push(`Δ = ${formatNumber(delta)} < 0: vô nghiệm thực`);
                    result.analysis.push(`Parabol ${a > 0 ? 'mở lên' : 'mở xuống'}`);
                }
            }
            
            displayResult(result);
        }
        
        // 3. Bất phương trình chứa √(ax + b)
        function solveSqrtLinear() {
            const a = parseFloat(document.getElementById('sqrt-a').value) || 0;
            const b = parseFloat(document.getElementById('sqrt-b').value) || 0;
            const c = parseFloat(document.getElementById('sqrt-c').value) || 0;
            const d = parseFloat(document.getElementById('sqrt-d').value) || 0;
            
            const result = {
                steps: [],
                solution: '',
                interval: '',
                analysis: []
            };
            
            result.steps.push(`Bất phương trình: √(${a !== 0 ? formatNumber(a) + 'x' : ''}${b >= 0 ? ' + ' : ' - '}${formatNumber(Math.abs(b))}) ${currentOperator} ${c !== 0 ? formatNumber(c) + 'x' : ''}${d >= 0 ? ' + ' : ' - '}${formatNumber(Math.abs(d))}`);
            
            // Điều kiện xác định
            const condition = a !== 0 ? `${formatNumber(a)}x ${b >= 0 ? '+' : '-'} ${formatNumber(Math.abs(b))} ≥ 0` : `${formatNumber(b)} ≥ 0`;
            result.steps.push(`Điều kiện xác định: ${condition}`);
            
            // Thêm điều kiện vào phân tích
            const conditionBox = document.createElement('div');
            conditionBox.className = 'condition-box';
            conditionBox.innerHTML = `<h4>Điều kiện xác định:</h4><p>${condition}</p>`;
            document.getElementById('solutionContainer').appendChild(conditionBox);
            
            // Giải điều kiện
            let conditionSolution;
            if (a > 0) {
                const condX = -b / a;
                conditionSolution = `x ≥ ${formatNumber(condX)}`;
            } else if (a < 0) {
                const condX = -b / a;
                conditionSolution = `x ≤ ${formatNumber(condX)}`;
            } else {
                conditionSolution = b >= 0 ? '∀x ∈ ℝ' : '∅ (vô nghiệm)';
            }
            
            result.steps.push(`Giải điều kiện: ${conditionSolution}`);
            
            // Xét các trường hợp
            if (c === 0) {
                // Trường hợp vế phải là hằng số
                result.steps.push(`Vế phải là hằng số: ${formatNumber(d)}`);
                
                if (currentOperator === '>' || currentOperator === '>=') {
                    if (d < 0) {
                        result.solution = conditionSolution === '∅ (vô nghiệm)' ? '∅ (vô nghiệm)' : conditionSolution;
                        result.analysis.push(`Vế phải âm, căn thức luôn không âm`);
                        result.analysis.push(`Bất phương trình luôn đúng với mọi x thỏa điều kiện`);
                    } else {
                        // Bình phương hai vế
                        result.steps.push(`Bình phương hai vế: ${a}x + ${b} ${currentOperator === '>' ? '>' : '≥'} ${d * d}`);
                        
                        const newRight = d * d - b;
                        const solution = a !== 0 ? `x ${currentOperator === '>' ? '>' : '≥'} ${formatNumber(newRight / a)}` : `0 ${currentOperator === '>' ? '>' : '≥'} ${formatNumber(newRight)}`;
                        
                        result.steps.push(`Giải bất phương trình: ${solution}`);
                        result.solution = `${solution} và ${conditionSolution}`;
                        result.analysis.push(`Vế phải không âm, bình phương hai vế`);
                    }
                } else {
                    // currentOperator là < hoặc <=
                    if (d < 0) {
                        result.solution = '∅ (vô nghiệm)';
                        result.analysis.push(`Vế phải âm, căn thức luôn không âm`);
                        result.analysis.push(`Bất phương trình vô nghiệm`);
                    } else {
                        // Bình phương hai vế, đổi chiều bất đẳng thức
                        result.steps.push(`Bình phương hai vế: ${a}x + ${b} ${currentOperator === '<' ? '<' : '≤'} ${d * d}`);
                        
                        const newRight = d * d - b;
                        const solution = a !== 0 ? `x ${currentOperator === '<' ? '<' : '≤'} ${formatNumber(newRight / a)}` : `0 ${currentOperator === '<' ? '<' : '≤'} ${formatNumber(newRight)}`;
                        
                        result.steps.push(`Giải bất phương trình: ${solution}`);
                        result.solution = `${solution} và ${conditionSolution}`;
                        result.analysis.push(`Vế phải không âm, bình phương hai vế`);
                    }
                }
            } else {
                result.steps.push(`Vế phải có chứa x, cần xét nhiều trường hợp`);
                result.solution = "Bài toán phức tạp, cần xét bảng xét dấu";
                result.analysis.push(`Dạng bài phức tạp với vế phải chứa x`);
                result.analysis.push(`Cần xét từng khoảng nghiệm của vế phải`);
            }
            
            displayResult(result);
        }
        
        // 4. Bất phương trình chứa √(ax² + bx + c)
        function solveSqrtQuadratic() {
            const a = parseFloat(document.getElementById('sqrt2-a').value) || 0;
            const b = parseFloat(document.getElementById('sqrt2-b').value) || 0;
            const c = parseFloat(document.getElementById('sqrt2-c').value) || 0;
            const d = parseFloat(document.getElementById('sqrt2-d').value) || 0;
            
            const result = {
                steps: [],
                solution: '',
                interval: '',
                analysis: []
            };
            
            result.steps.push(`Bất phương trình: √(${formatNumber(a)}x² + ${formatNumber(b)}x + ${formatNumber(c)}) ${currentOperator} ${formatNumber(d)}`);
            
            // Điều kiện xác định
            result.steps.push(`Điều kiện xác định: ${formatNumber(a)}x² + ${formatNumber(b)}x + ${formatNumber(c)} ≥ 0`);
            
            // Thêm điều kiện vào phân tích
            const conditionBox = document.createElement('div');
            conditionBox.className = 'condition-box';
            conditionBox.innerHTML = `<h4>Điều kiện xác định:</h4><p>${formatNumber(a)}x² + ${formatNumber(b)}x + ${formatNumber(c)} ≥ 0</p>`;
            document.getElementById('solutionContainer').appendChild(conditionBox);
            
            if (currentOperator === '<' || currentOperator === '<=') {
                // Vế trái ≥ 0, nếu vế phải < 0 thì vô nghiệm
                if (d < 0) {
                    result.solution = '∅ (vô nghiệm)';
                    result.analysis.push(`Vế phải âm, căn thức luôn không âm`);
                    result.analysis.push(`Bất phương trình vô nghiệm`);
                } else {
                    // Bình phương hai vế
                    result.steps.push(`Bình phương hai vế: ${formatNumber(a)}x² + ${formatNumber(b)}x + ${formatNumber(c)} ${currentOperator === '<' ? '<' : '≤'} ${formatNumber(d * d)}`);
                    
                    // Chuyển vế
                    const newA = a;
                    const newB = b;
                    const newC = c - d * d;
                    
                    result.steps.push(`Chuyển vế: ${formatNumber(newA)}x² + ${formatNumber(newB)}x + ${formatNumber(newC)} ${currentOperator === '<' ? '<' : '≤'} 0`);
                    
                    // Giải bất phương trình bậc 2
                    const delta = newB * newB - 4 * newA * newC;
                    
                    if (delta > 0) {
                        const sqrtDelta = Math.sqrt(delta);
                        const x1 = (-newB - sqrtDelta) / (2 * newA);
                        const x2 = (-newB + sqrtDelta) / (2 * newA);
                        const xMin = Math.min(x1, x2);
                        const xMax = Math.max(x1, x2);
                        
                        let interval;
                        if (newA > 0) {
                            interval = currentOperator === '<' ? `(${formatNumber(xMin)}, ${formatNumber(xMax)})` : `[${formatNumber(xMin)}, ${formatNumber(xMax)}]`;
                        } else {
                            interval = currentOperator === '<' ? `(-∞, ${formatNumber(xMin)}) ∪ (${formatNumber(xMax)}, +∞)` : `(-∞, ${formatNumber(xMin)}] ∪ [${formatNumber(xMax)}, +∞)`;
                        }
                        
                        result.solution = `Kết hợp với điều kiện xác định`;
                        result.interval = interval;
                        result.analysis.push(`Δ = ${formatNumber(delta)} > 0: có 2 nghiệm`);
                        result.analysis.push(`Kết hợp nghiệm với điều kiện`);
                    } else if (delta === 0) {
                        const x = -newB / (2 * newA);
                        result.solution = newA > 0 ? (currentOperator === '<' ? '∅ (vô nghiệm)' : `x = ${formatNumber(x)}`) : '∀x ∈ ℝ';
                        result.analysis.push(`Δ = 0: nghiệm kép x = ${formatNumber(x)}`);
                    } else {
                        result.solution = newA > 0 ? '∅ (vô nghiệm)' : '∀x ∈ ℝ';
                        result.analysis.push(`Δ < 0: vô nghiệm thực`);
                    }
                }
            } else {
                // currentOperator là > hoặc >=
                if (d < 0) {
                    // Vế phải âm, vế trái ≥ 0, luôn đúng với mọi x thỏa điều kiện
                    result.solution = 'Tất cả x thỏa điều kiện xác định';
                    result.analysis.push(`Vế phải âm, căn thức luôn không âm`);
                    result.analysis.push(`Bất phương trình luôn đúng với điều kiện`);
                } else {
                    // Bình phương hai vế
                    result.steps.push(`Bình phương hai vế: ${formatNumber(a)}x² + ${formatNumber(b)}x + ${formatNumber(c)} ${currentOperator === '>' ? '>' : '≥'} ${formatNumber(d * d)}`);
                    
                    // Chuyển vế
                    const newA = a;
                    const newB = b;
                    const newC = c - d * d;
                    
                    result.steps.push(`Chuyển vế: ${formatNumber(newA)}x² + ${formatNumber(newB)}x + ${formatNumber(newC)} ${currentOperator === '>' ? '>' : '≥'} 0`);
                    
                    // Giải bất phương trình bậc 2
                    const delta = newB * newB - 4 * newA * newC;
                    
                    if (delta > 0) {
                        const sqrtDelta = Math.sqrt(delta);
                        const x1 = (-newB - sqrtDelta) / (2 * newA);
                        const x2 = (-newB + sqrtDelta) / (2 * newA);
                        const xMin = Math.min(x1, x2);
                        const xMax = Math.max(x1, x2);
                        
                        let interval;
                        if (newA > 0) {
                            interval = currentOperator === '>' ? `(-∞, ${formatNumber(xMin)}) ∪ (${formatNumber(xMax)}, +∞)` : `(-∞, ${formatNumber(xMin)}] ∪ [${formatNumber(xMax)}, +∞)`;
                        } else {
                            interval = currentOperator === '>' ? `(${formatNumber(xMin)}, ${formatNumber(xMax)})` : `[${formatNumber(xMin)}, ${formatNumber(xMax)}]`;
                        }
                        
                        result.solution = `Kết hợp với điều kiện xác định`;
                        result.interval = interval;
                        result.analysis.push(`Δ = ${formatNumber(delta)} > 0: có 2 nghiệm`);
                        result.analysis.push(`Kết hợp nghiệm với điều kiện`);
                    } else if (delta === 0) {
                        const x = -newB / (2 * newA);
                        result.solution = newA > 0 ? (currentOperator === '>' ? `x ≠ ${formatNumber(x)}` : '∀x ∈ ℝ') : (currentOperator === '>' ? '∅ (vô nghiệm)' : `x = ${formatNumber(x)}`);
                        result.analysis.push(`Δ = 0: nghiệm kép x = ${formatNumber(x)}`);
                    } else {
                        result.solution = newA > 0 ? '∀x ∈ ℝ' : '∅ (vô nghiệm)';
                        result.analysis.push(`Δ < 0: vô nghiệm thực`);
                    }
                }
            }
            
            displayResult(result);
        }
        
        // 5. Bất phương trình chứa căn bậc 3
        function solveCubicRoot() {
            const a = parseFloat(document.getElementById('cubic-a').value) || 0;
            const b = parseFloat(document.getElementById('cubic-b').value) || 0;
            const c = parseFloat(document.getElementById('cubic-c').value) || 0;
            const d = parseFloat(document.getElementById('cubic-d').value) || 0;
            
            const result = {
                steps: [],
                solution: '',
                interval: '',
                analysis: []
            };
            
            result.steps.push(`Bất phương trình: ³√(${a !== 0 ? formatNumber(a) + 'x' : ''}${b >= 0 ? ' + ' : ' - '}${formatNumber(Math.abs(b))}) ${currentOperator} ${c !== 0 ? formatNumber(c) + 'x' : ''}${d >= 0 ? ' + ' : ' - '}${formatNumber(Math.abs(d))}`);
            
            // Căn bậc 3 xác định với mọi x
            result.steps.push(`Căn bậc 3 xác định với mọi x ∈ ℝ`);
            result.analysis.push(`Căn bậc 3: xác định với mọi số thực`);
            
            if (c === 0) {
                // Vế phải là hằng số
                result.steps.push(`Vế phải là hằng số: ${formatNumber(d)}`);
                result.steps.push(`Lập phương hai vế: ${a}x + ${b} ${currentOperator} ${d * d * d}`);
                
                const cubeD = d * d * d;
                const newRight = cubeD - b;
                
                let solution;
                if (a > 0) {
                    switch(currentOperator) {
                        case '>': solution = `x > ${formatNumber(newRight / a)}`; break;
                        case '>=': solution = `x ≥ ${formatNumber(newRight / a)}`; break;
                        case '<': solution = `x < ${formatNumber(newRight / a)}`; break;
                        case '<=': solution = `x ≤ ${formatNumber(newRight / a)}`; break;
                    }
                } else if (a < 0) {
                    switch(currentOperator) {
                        case '>': solution = `x < ${formatNumber(newRight / a)}`; break;
                        case '>=': solution = `x ≤ ${formatNumber(newRight / a)}`; break;
                        case '<': solution = `x > ${formatNumber(newRight / a)}`; break;
                        case '<=': solution = `x ≥ ${formatNumber(newRight / a)}`; break;
                    }
                } else {
                    // a = 0
                    const constant = b;
                    switch(currentOperator) {
                        case '>': solution = constant > cubeD ? '∀x ∈ ℝ' : '∅ (vô nghiệm)'; break;
                        case '>=': solution = constant >= cubeD ? '∀x ∈ ℝ' : '∅ (vô nghiệm)'; break;
                        case '<': solution = constant < cubeD ? '∀x ∈ ℝ' : '∅ (vô nghiệm)'; break;
                        case '<=': solution = constant <= cubeD ? '∀x ∈ ℝ' : '∅ (vô nghiệm)'; break;
                    }
                }
                
                result.solution = solution;
                result.analysis.push(`Lập phương để loại bỏ căn bậc 3`);
                
            } else {
                result.steps.push(`Vế phải chứa x, cần giải bất phương trình đại số`);
                result.solution = "Bài toán phức tạp, cần giải phương trình đại số sau khi lập phương";
                result.analysis.push(`Dạng bài phức tạp với vế phải chứa x`);
                result.analysis.push(`Cần lập phương và giải bất phương trình đại số`);
            }
            
            displayResult(result);
        }
        
        // ========== HÀM TẠO VÍ DỤ ==========
        
        function generateLinearExample() {
            const examples = [
                {a: 2, b: 3, c: 0},
                {a: -1, b: 5, c: 0},
                {a: 3, b: -6, c: 0},
                {a: 0, b: 4, c: 0},
                {a: 1, b: 0, c: 2}
            ];
            
            const example = examples[Math.floor(Math.random() * examples.length)];
            document.getElementById('linear-a').value = example.a;
            document.getElementById('linear-b').value = example.b;
            document.getElementById('linear-c').value = example.c;
            
            // Chọn toán tử ngẫu nhiên
            const operators = ['>', '>=', '<', '<='];
            currentOperator = operators[Math.floor(Math.random() * operators.length)];
            
            updateLinearEquation();
            updateOperatorButtons();
        }
        
        function generateQuadraticExample() {
            const examples = [
                {a: 1, b: -3, c: 2},
                {a: -2, b: 4, c: -1},
                {a: 1, b: 0, c: -4},
                {a: 1, b: 2, c: 1},
                {a: 1, b: 1, c: 1}
            ];
            
            const example = examples[Math.floor(Math.random() * examples.length)];
            document.getElementById('quadratic-a').value = example.a;
            document.getElementById('quadratic-b').value = example.b;
            document.getElementById('quadratic-c').value = example.c;
            
            updateQuadraticEquation();
        }
        
        function generateSqrtLinearExample() {
            const examples = [
                {a: 2, b: 1, c: 0, d: 3},
                {a: 1, b: 4, c: 0, d: 2},
                {a: 3, b: -6, c: 0, d: 0},
                {a: 1, b: 0, c: 1, d: -1}
            ];
            
            const example = examples[Math.floor(Math.random() * examples.length)];
            document.getElementById('sqrt-a').value = example.a;
            document.getElementById('sqrt-b').value = example.b;
            document.getElementById('sqrt-c').value = example.c;
            document.getElementById('sqrt-d').value = example.d;
            
            updateSqrtLinearEquation();
        }
        
        function generateSqrtQuadraticExample() {
            const examples = [
                {a: 1, b: 0, c: -4, d: 3},
                {a: 1, b: -2, c: -3, d: 2},
                {a: 2, b: 4, c: 2, d: 1},
                {a: 1, b: 0, c: 0, d: 2}
            ];
            
            const example = examples[Math.floor(Math.random() * examples.length)];
            document.getElementById('sqrt2-a').value = example.a;
            document.getElementById('sqrt2-b').value = example.b;
            document.getElementById('sqrt2-c').value = example.c;
            document.getElementById('sqrt2-d').value = example.d;
            
            updateSqrtQuadraticEquation();
        }
        
        function generateCubicRootExample() {
            const examples = [
                {a: 2, b: 1, c: 0, d: 1},
                {a: 1, b: -2, c: 0, d: 0},
                {a: 3, b: 6, c: 1, d: 2},
                {a: 1, b: 0, c: 1, d: -1}
            ];
            
            const example = examples[Math.floor(Math.random() * examples.length)];
            document.getElementById('cubic-a').value = example.a;
            document.getElementById('cubic-b').value = example.b;
            document.getElementById('cubic-c').value = example.c;
            document.getElementById('cubic-d').value = example.d;
            
            updateCubicRootEquation();
        }
        
        function generateRandomExample() {
            const types = ['linear', 'quadratic', 'sqrt-linear', 'sqrt-quadratic', 'cubic-root'];
            const randomType = types[Math.floor(Math.random() * types.length)];
            
            switchType(randomType);
            
            switch(randomType) {
                case 'linear': generateLinearExample(); break;
                case 'quadratic': generateQuadraticExample(); break;
                case 'sqrt-linear': generateSqrtLinearExample(); break;
                case 'sqrt-quadratic': generateSqrtQuadraticExample(); break;
                case 'cubic-root': generateCubicRootExample(); break;
            }
        }
        
        // ========== HÀM XÓA DỮ LIỆU ==========
        
        function clearLinear() {
            document.getElementById('linear-a').value = '';
            document.getElementById('linear-b').value = '';
            document.getElementById('linear-c').value = '';
            document.getElementById('linear-equation').textContent = 'Nhập hệ số để hiển thị phương trình';
            document.getElementById('resultSection').classList.remove('show');
        }
        
        function clearQuadratic() {
            document.getElementById('quadratic-a').value = '';
            document.getElementById('quadratic-b').value = '';
            document.getElementById('quadratic-c').value = '';
            document.getElementById('quadratic-equation').textContent = 'Nhập hệ số để hiển thị phương trình';
            document.getElementById('resultSection').classList.remove('show');
        }
        
        function clearSqrtLinear() {
            document.getElementById('sqrt-a').value = '';
            document.getElementById('sqrt-b').value = '';
            document.getElementById('sqrt-c').value = '';
            document.getElementById('sqrt-d').value = '';
            document.getElementById('sqrt-linear-equation').textContent = 'Nhập hệ số để hiển thị phương trình';
            document.getElementById('resultSection').classList.remove('show');
        }
        
        function clearSqrtQuadratic() {
            document.getElementById('sqrt2-a').value = '';
            document.getElementById('sqrt2-b').value = '';
            document.getElementById('sqrt2-c').value = '';
            document.getElementById('sqrt2-d').value = '';
            document.getElementById('sqrt-quadratic-equation').textContent = 'Nhập hệ số để hiển thị phương trình';
            document.getElementById('resultSection').classList.remove('show');
        }
        
        function clearCubicRoot() {
            document.getElementById('cubic-a').value = '';
            document.getElementById('cubic-b').value = '';
            document.getElementById('cubic-c').value = '';
            document.getElementById('cubic-d').value = '';
            document.getElementById('cubic-root-equation').textContent = 'Nhập hệ số để hiển thị phương trình';
            document.getElementById('resultSection').classList.remove('show');
        }
        
        // ========== KHỞI TẠO ==========
        
        document.addEventListener('DOMContentLoaded', function() {
            // Khởi tạo toán tử mặc định
            updateOperatorButtons();
            
            // Cập nhật phương trình ban đầu
            updateEquationDisplay();
            
            // Sự kiện cho nút chuyển loại
            document.querySelectorAll('.type-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    switchType(this.dataset.type);
                    document.getElementById('resultSection').classList.remove('show');
                });
            });
            
            // Sự kiện cho nút toán tử
            document.querySelectorAll('.operator-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    changeOperator(this.dataset.op);
                });
            });
            
            // Sự kiện cập nhật phương trình khi thay đổi hệ số
            document.querySelectorAll('#linear-a, #linear-b, #linear-c').forEach(input => {
                input.addEventListener('input', () => {
                    if (currentType === 'linear') updateLinearEquation();
                });
            });
            
            document.querySelectorAll('#quadratic-a, #quadratic-b, #quadratic-c').forEach(input => {
                input.addEventListener('input', () => {
                    if (currentType === 'quadratic') updateQuadraticEquation();
                });
            });
            
            document.querySelectorAll('#sqrt-a, #sqrt-b, #sqrt-c, #sqrt-d').forEach(input => {
                input.addEventListener('input', () => {
                    if (currentType === 'sqrt-linear') updateSqrtLinearEquation();
                });
            });
            
            document.querySelectorAll('#sqrt2-a, #sqrt2-b, #sqrt2-c, #sqrt2-d').forEach(input => {
                input.addEventListener('input', () => {
                    if (currentType === 'sqrt-quadratic') updateSqrtQuadraticEquation();
                });
            });
            
            document.querySelectorAll('#cubic-a, #cubic-b, #cubic-c, #cubic-d').forEach(input => {
                input.addEventListener('input', () => {
                    if (currentType === 'cubic-root') updateCubicRootEquation();
                });
            });
        });
    </script>
</body>
</html>