<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xivaro Hub - Professional Eyelash Extensions & Beauty Services</title>
    <meta name="description" content="Xivaro Hub offers expert eyelash extension services, lash lifts, and brow treatments. Our certified technicians provide personalized beauty solutions with attention to detail. Click here to continue exploring our comprehensive eyelash services and discover the perfect look for your eyes.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background: #f8f9fa;
        }

        .nav8x4k2m {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navcontainer9j3l {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            flex-wrap: wrap;
        }

        .logo5p8q {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .navlinks7m2n {
            display: flex;
            list-style: none;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .navlinks7m2n a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
            font-weight: 500;
        }

        .navlinks7m2n a:hover {
            opacity: 0.8;
        }

        .hero3k9d {
            background: linear-gradient(rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8)), url('https://images.pexels.com/photos/3373736/pexels-photo-3373736.jpeg?auto=compress&cs=tinysrgb&w=1260') center/cover;
            color: white;
            padding: 120px 20px;
            text-align: center;
        }

        .herocontent6t4r {
            max-width: 800px;
            margin: 0 auto;
        }

        .herocontent6t4r h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .herocontent6t4r p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .ctabtn8w5e {
            display: inline-block;
            background: #ff6b6b;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .ctabtn8w5e:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        .section2h7k {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .sectionalt4n9p {
            background: white;
            padding: 80px 20px;
        }

        .sectiontitle3x8m {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #667eea;
        }

        .grid3col5k2j {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .card9m4l {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .card9m4l:hover {
            transform: translateY(-10px);
        }

        .card9m4l h3 {
            color: #764ba2;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .card9m4l img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .timeline6j8n {
            position: relative;
            padding: 2rem 0;
        }

        .timelineitem3k5m {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-left: 4px solid #667eea;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .timelineitem3k5m h3 {
            color: #764ba2;
            margin-bottom: 0.5rem;
        }

        .reviewcard7p2k {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 2rem;
            border-radius: 15px;
            margin: 1rem 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .reviewheader8n3j {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .reviewerimg4k9m {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 1rem;
            object-fit: cover;
        }

        .stars5m8k {
            color: #ffd700;
            font-size: 1.2rem;
        }

        .footer9x4l {
            background: #2c3e50;
            color: white;
            padding: 3rem 20px;
            margin-top: 4rem;
        }

        .footercontent3j8k {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footersection7m2p h3 {
            margin-bottom: 1rem;
            color: #667eea;
        }

        .footersection7m2p p, .footersection7m2p a {
            color: #ecf0f1;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
        }

        .footersection7m2p a:hover {
            color: #667eea;
        }

        .modal8k3n {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            overflow: auto;
        }

        .modalcontent5j9p {
            background: white;
            margin: 5% auto;
            padding: 2rem;
            width: 90%;
            max-width: 800px;
            border-radius: 15px;
            max-height: 80vh;
            overflow-y: auto;
        }

        .closebtn7k2m {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .closebtn7k2m:hover {
            color: #000;
        }

        .infogrid4n8j {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .infobox6m3k {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }

        .infobox6m3k h4 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .processlist8j4n {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .processlist8j4n ol {
            margin-left: 1.5rem;
        }

        .processlist8j4n li {
            margin: 1rem 0;
            padding-left: 0.5rem;
        }

        .highlight3k7m {
            background: #fff3cd;
            padding: 1.5rem;
            border-left: 4px solid #ffc107;
            margin: 2rem 0;
            border-radius: 5px;
        }

        .teamgrid5n8k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .teammember7j3m {
            text-align: center;
        }

        .teammember7j3m img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 4px solid #667eea;
        }

        .linkbtn9k4j {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 25px;
            margin: 1rem 0;
            transition: background 0.3s;
        }

        .linkbtn9k4j:hover {
            background: #764ba2;
        }

        @media (max-width: 768px) {
            .herocontent6t4r h1 {
                font-size: 2rem;
            }
            
            .navlinks7m2n {
                gap: 1rem;
            }
            
            .sectiontitle3x8m {
                font-size: 2rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%38%30%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

    <nav class="nav8x4k2m">
        <div class="navcontainer9j3l">
            <a href="#home" class="logo5p8q">Xivaro Hub</a>
            <ul class="navlinks7m2n">
                <li><a href="#home">Home</a></li>
                <li><a href="#services8k3m">Services</a></li>
                <li><a href="#about7j4n">About Us</a></li>
                <li><a href="#history5m9k">Our Story</a></li>
                <li><a href="#process6n2j">Process</a></li>
                <li><a href="#team8k5m">Team</a></li>
                <li><a href="#expertise4j7n">Expertise</a></li>
                <li><a href="#reviews3m8k">Reviews</a></li>
                <li><a href="#contact9j2m">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero3k9d">
        <div class="herocontent6t4r">
            <h1>Xivaro Hub Eyelash Extensions</h1>
            <p>Transform your natural beauty with our expert eyelash extension services and personalized care</p>
            <a href="#services8k3m" class="ctabtn8w5e">Explore Our Services</a>
        </div>
    </section>

    <section id="services8k3m" class="section2h7k">
        <h2 class="sectiontitle3x8m">Our Eyelash Services</h2>
        <div class="grid3col5k2j">
            <div class="card9m4l">
                <img src="https://images.pexels.com/photos/3997379/pexels-photo-3997379.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Classic Lash Extensions">
                <h3>Classic Lash Extensions</h3>
                <p>Experience the timeless elegance of classic lash extensions where each individual natural lash receives a single extension. This technique creates a naturally enhanced look that brightens your eyes while maintaining a sophisticated appearance. Perfect for everyday wear and those seeking subtle enhancement.</p>
                <a href="#contact9j2m" class="linkbtn9k4j">Click here to continue</a>
            </div>
            <div class="card9m4l">
                <img src="https://images.pexels.com/photos/5069432/pexels-photo-5069432.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Volume Lash Extensions">
                <h3>Volume Lash Extensions</h3>
                <p>Discover the dramatic effect of volume lashes where multiple lightweight extensions are applied to each natural lash. This advanced technique creates fuller, more voluminous lashes with incredible depth and dimension. Ideal for special occasions or those who desire a more glamorous everyday look.</p>
                <a href="#contact9j2m" class="linkbtn9k4j">Learn More</a>
            </div>
            <div class="card9m4l">
                <img src="https://images.pexels.com/photos/7755566/pexels-photo-7755566.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Lash Lift Treatment">
                <h3>Lash Lift Treatment</h3>
                <p>Enhance your natural lashes with our professional lash lift service that curls and lifts your existing lashes from the root. This semi-permanent treatment eliminates the need for daily curling and creates the appearance of longer, more defined lashes. Results last for several weeks with proper care.</p>
                <a href="#contact9j2m" class="linkbtn9k4j">Book Now</a>
            </div>
            <div class="card9m4l">
                <img src="https://images.pexels.com/photos/3997386/pexels-photo-3997386.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Hybrid Lash Extensions">
                <h3>Hybrid Lash Extensions</h3>
                <p>Combine the best of both worlds with hybrid lash extensions that blend classic and volume techniques. This versatile approach creates a textured, wispy effect that adds both length and fullness. Perfect for clients who want more than classic but less than full volume.</p>
                <a href="#contact9j2m" class="linkbtn9k4j">Discover More</a>
            </div>
            <div class="card9m4l">
                
                <h3>Lash Tinting Services</h3>
                <p>Darken and define your natural lashes with our professional tinting service. This treatment enhances the appearance of your lashes without the need for mascara, making them appear fuller and more noticeable. Especially beneficial for those with lighter colored lashes.</p>
                <a href="#contact9j2m" class="linkbtn9k4j">Get Started</a>
            </div>
            <div class="card9m4l">
                <img src="https://images.pexels.com/photos/6663446/pexels-photo-6663446.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Brow Shaping">
                <h3>Eyebrow Shaping</h3>
                <p>Complete your look with expert eyebrow shaping and tinting services. Our technicians carefully analyze your facial structure to create the perfect brow shape that complements your features. We offer threading, waxing, and tinting to achieve your desired results.</p>
                <a href="#contact9j2m" class="linkbtn9k4j">View Options</a>
            </div>
        </div>
    </section>

    <section id="about7j4n" class="sectionalt4n9p">
        <div class="section2h7k">
            <h2 class="sectiontitle3x8m">About Xivaro Hub</h2>
            <div class="highlight3k7m">
                <p>At Xivaro Hub, we specialize in creating beautiful, natural-looking eyelash extensions that enhance your unique features. Our certified lash technicians bring years of experience and dedication to every appointment, ensuring you receive personalized service tailored to your specific needs and preferences.</p>
            </div>
            <div class="infogrid4n8j">
                <div class="infobox6m3k">
                    <h4>500+</h4>
                    <p>Satisfied Clients</p>
                </div>
                <div class="infobox6m3k">
                    <h4>8 Years</h4>
                    <p>Industry Experience</p>
                </div>
                <div class="infobox6m3k">
                    <h4>15+</h4>
                    <p>Certified Technicians</p>
                </div>
                <div class="infobox6m3k">
                    <h4>100%</h4>
                    <p>Quality Guarantee</p>
                </div>
            </div>
            <p style="margin-top: 2rem; text-align: center; font-size: 1.1rem;">We understand that your lashes are an important part of your overall appearance and self-confidence. That's why we use only the highest quality products and maintain strict hygiene standards. Our comfortable studio environment ensures you can relax during your appointment while we work our magic. Every client receives a thorough consultation to discuss their desired look, lifestyle, and any concerns they may have.</p>
        </div>
    </section>

    <section id="history5m9k" class="section2h7k">
        <h2 class="sectiontitle3x8m">Our Journey</h2>
        <div class="timeline6j8n">
            <div class="timelineitem3k5m">
                <h3>2016 - The Beginning</h3>
                <p>Xivaro Hub was founded by master lash technician Rebecca Thornfield who recognized a gap in the market for truly personalized eyelash extension services. Starting from a small studio space with just two treatment chairs, Rebecca's vision was to create a welcoming environment where clients could receive expert care without feeling rushed or overlooked. The first year focused on building a loyal client base through word-of-mouth referrals and exceptional service quality.</p>
            </div>
            <div class="timelineitem3k5m">
                <h3>2017 - Expansion Phase</h3>
                <p>Due to overwhelming demand and consistently positive feedback, Xivaro Hub expanded to a larger location that could accommodate four technicians and a dedicated consultation area. This growth allowed us to serve more clients while maintaining our commitment to individualized attention. We also introduced our signature hybrid lash technique that quickly became a client favorite for its natural yet dramatic results.</p>
            </div>
            <div class="timelineitem3k5m">
                <h3>2019 - Training Academy Launch</h3>
                <p>Recognizing the need for properly trained lash technicians in the industry, we launched the Xivaro Hub Training Academy. This program has since certified over 200 technicians who have gone on to open their own successful businesses or join established salons. Our comprehensive curriculum covers everything from basic application techniques to advanced volume methods and business management skills.</p>
            </div>
            <div class="timelineitem3k5m">
                <h3>2021 - Product Line Development</h3>
                <p>After years of testing various products on the market, we decided to develop our own line of lash extension supplies and aftercare products. These formulations were created specifically to address common concerns we heard from clients, such as sensitivity and retention issues. Our products are now used not only in our own studio but also sold to other professionals nationwide.</p>
            </div>
            <div class="timelineitem3k5m">
                <h3>2023 - Community Recognition</h3>
                <p>Xivaro Hub received the Outstanding Beauty Service Award from the Regional Business Association, recognizing our contributions to the local beauty industry and our commitment to excellence. We also launched our community outreach program, offering complimentary services to individuals undergoing medical treatments that affect their natural lashes, helping them feel confident during challenging times.</p>
            </div>
            <div class="timelineitem3k5m">
                <h3>2024 - Present Day</h3>
                <p>Today, Xivaro Hub operates with a team of fifteen highly skilled technicians, each bringing their unique expertise and artistic vision to their work. We continue to invest in ongoing education, ensuring our team stays current with the latest techniques and industry innovations. Our studio has become a destination for clients seeking not just beautiful lashes, but a relaxing, rejuvenating experience. <a href="#contact9j2m" class="linkbtn9k4j">Click here to continue</a></p>
            </div>
        </div>
    </section>

    <section id="process6n2j" class="sectionalt4n9p">
        <div class="section2h7k">
            <h2 class="sectiontitle3x8m">Our Application Process</h2>
            <div class="processlist8j4n">
                <ol>
                    <li><strong>Initial Consultation:</strong> Your journey begins with a comprehensive consultation where we discuss your desired look, assess your natural lashes, and review your lifestyle factors. We'll explain different extension styles, lengths, and curls to help you make an informed decision. This conversation typically takes 15-20 minutes and ensures we're aligned on expectations before beginning the application.</li>
                    
                    <li><strong>Preparation and Cleansing:</strong> We thoroughly cleanse your natural lashes and eye area to remove any makeup, oils, or debris. This crucial step ensures optimal adhesion and longevity of your extensions. We use gentle, professional-grade cleansers that are safe for the delicate eye area and won't cause irritation or discomfort.</li>
                    
                    <li><strong>Eye Protection Application:</strong> Specialized under-eye gel patches are carefully placed to protect your lower lashes and skin during the application process. These patches also help keep your eyes comfortably closed throughout the treatment. We ensure they're positioned correctly to prevent any adhesive contact with your skin.</li>
                    
                    <li><strong>Lash Isolation:</strong> Using precision tools, we isolate each individual natural lash to ensure proper extension placement. This meticulous technique prevents lashes from sticking together and allows each extension to move naturally with your own lash. Proper isolation is key to maintaining lash health and achieving beautiful results.</li>
                    
                    <li><strong>Extension Application:</strong> Each extension is carefully dipped in a small amount of medical-grade adhesive and applied to your natural lash with expert precision. We work systematically across your lash line, ensuring consistent placement, angle, and spacing. The process requires steady hands and keen attention to detail, which is why we never rush through appointments.</li>
                    
                    <li><strong>Drying and Setting:</strong> After all extensions are applied, we allow adequate time for the adhesive to fully cure. We may use a gentle air blower to accelerate this process while ensuring your comfort. Proper curing time is essential for long-lasting results and prevents premature shedding.</li>
                    
                    <li><strong>Final Inspection:</strong> We carefully examine your lashes from multiple angles to ensure symmetry, proper attachment, and overall aesthetic appeal. Any necessary adjustments are made at this stage. We check that no lashes are stuck together and that each extension is securely bonded.</li>
                    
                    <li><strong>Aftercare Education:</strong> Before you leave, we provide detailed aftercare instructions and answer any questions you may have. You'll receive information about cleaning your lashes, what products to avoid, and how to maintain your extensions between fills. We also schedule your next appointment to ensure optimal retention.</li>
                </ol>
            </div>
            <div class="highlight3k7m" style="margin-top: 2rem;">
                <p><strong>Important Note:</strong> The entire process typically takes between 90 minutes to 2.5 hours depending on the style chosen and your natural lash condition. We recommend arriving with clean lashes and no eye makeup. Avoid caffeine before your appointment as it can make it difficult to keep your eyes closed comfortably for the duration of the service.</p>
            </div>
        </div>
    </section>

    <section id="team8k5m" class="section2h7k">
        <h2 class="sectiontitle3x8m">Meet Our Expert Team</h2>
        <div class="teamgrid5n8k">
            <div class="teammember7j3m">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Rebecca Thornfield">
                <h3>Rebecca Thornfield</h3>
                <p>Founder & Master Technician</p>
                <p>12 years experience</p>
            </div>
            <div class="teammember7j3m">
                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Samantha Chen">
                <h3>Samantha Chen</h3>
                <p>Senior Lash Artist</p>
                <p>8 years experience</p>
            </div>
            <div class="teammember7j3m">
                <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Maria Rodriguez">
                <h3>Maria Rodriguez</h3>
                <p>Volume Specialist</p>
                <p>6 years experience</p>
            </div>
            <div class="teammember7j3m">
                <img src="https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg?auto=compress&cs=tinysrgb&w=300" alt="Jessica Williams">
                <h3>Jessica Williams</h3>
                <p>Lash & Brow Expert</p>
                <p>7 years experience</p>
            </div>
        </div>
        <p style="margin-top: 2rem; text-align: center;">Our team consists of certified professionals who have undergone extensive training in lash extension application, safety protocols, and customer service. Each technician participates in ongoing education to stay current with industry trends and techniques. We pride ourselves on creating a supportive, collaborative environment where knowledge is shared and excellence is the standard.</p>
    </section>

    <section id="expertise4j7n" class="sectionalt4n9p">
        <div class="section2h7k">
            <h2 class="sectiontitle3x8m">Our Areas of Expertise</h2>
            <div class="grid3col5k2j">
                <div class="card9m4l">
                    <h3>Sensitive Eye Solutions</h3>
                    <p>We specialize in working with clients who have sensitive eyes or have experienced reactions to lash extensions in the past. Our hypoallergenic adhesives and gentle application techniques minimize the risk of irritation while still delivering beautiful results. We take extra time to ensure your comfort throughout the process and can customize our approach based on your specific sensitivities.</p>
                </div>
                <div class="card9m4l">
                    <h3>Sparse Lash Enhancement</h3>
                    <p>Clients with naturally sparse or thin lashes require special attention and technique. We excel at creating the illusion of fullness even when working with limited natural lashes. Through strategic placement and careful selection of extension weights, we can transform sparse lashes into a beautiful, full lash line without compromising the health of your natural lashes.</p>
                </div>
                <div class="card9m4l">
                    <h3>Corrective Lash Work</h3>
                    <p>If you've had a poor experience with lash extensions elsewhere, we can help. Our corrective services involve safely removing improperly applied extensions and nursing your natural lashes back to health before applying new extensions correctly. We've successfully helped hundreds of clients recover from lash damage and regain their confidence.</p>
                </div>
                <div class="card9m4l">
                    <h3>Bridal Lash Packages</h3>
                    <p>Your wedding day deserves perfect lashes. Our bridal packages include a trial session to determine your ideal look, a pre-wedding fill to ensure freshness, and post-wedding care instructions. We work closely with brides to create lashes that photograph beautifully and last through tears of joy, ensuring you look stunning in every moment and memory.</p>
                </div>
                <div class="card9m4l">
                    <h3>Athletic Lifestyle Lashes</h3>
                    <p>Active individuals need lashes that can keep up with their lifestyle. We offer specialized application techniques and product selections that withstand swimming, sweating, and outdoor activities. Our athletic-friendly lashes maintain their appearance and integrity even with regular exposure to water and physical activity, perfect for those who refuse to compromise their beauty routine for their fitness goals.</p>
                </div>
                <div class="card9m4l">
                    <h3>Mature Lash Care</h3>
                    <p>As we age, our natural lashes can become more delicate and sparse. We have extensive experience working with mature clients, using lighter extensions and gentler techniques that enhance without overwhelming aging lashes. Our approach focuses on creating a naturally youthful appearance while prioritizing the health and longevity of your natural lashes. <a href="#reviews3m8k" class="linkbtn9k4j">Click here to continue</a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews3m8k" class="section2h7k">
        <h2 class="sectiontitle3x8m">Client Testimonials</h2>
        <div class="reviewcard7p2k">
            <div class="reviewheader8n3j">
                <img src="https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Jennifer Morrison" class="reviewerimg4k9m">
                <div>
                    <h4>Jennifer Morrison</h4>
                    <div class="stars5m8k">★★★★★</div>
                </div>
            </div>
            <p>I've been getting my lashes done at Xivaro Hub for over two years now and I couldn't be happier with the consistent quality and service. Rebecca and her team are true professionals who take the time to understand exactly what you want. My lashes always look natural yet stunning, and they last much longer than extensions I've gotten elsewhere. The studio is always clean and comfortable, and I actually look forward to my appointments as a relaxing break from my busy schedule.</p>
        </div>

        <div class="reviewcard7p2k">
            <div class="reviewheader8n3j">
                <img src="https://images.pexels.com/photos/1181424/pexels-photo-1181424.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Amanda Foster" class="reviewerimg4k9m">
                <div>
                    <h4>Amanda Foster</h4>
                    <div class="stars5m8k">★★★★★</div>
                </div>
            </div>
            <p>After a terrible experience at another salon left my natural lashes damaged, I was hesitant to try extensions again. The team at Xivaro Hub was incredibly understanding and patient with my concerns. They created a recovery plan for my lashes and once they were healthy again, applied extensions using techniques that prioritized lash health. Six months later, my natural lashes are healthier than ever and my extensions look amazing. I'm so grateful for their expertise and care.</p>
        </div>

        <div class="reviewcard7p2k">
            <div class="reviewheader8n3j">
                <img src="https://images.pexels.com/photos/1858175/pexels-photo-1858175.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Sarah Mitchell" class="reviewerimg4k9m">
                <div>
                    <h4>Sarah Mitchell</h4>
                    <div class="stars5m8k">★★★★★</div>
                </div>
            </div>
            <p>As someone with very sensitive eyes, I never thought lash extensions would be possible for me. Xivaro Hub proved me wrong! They used special hypoallergenic products and took extra precautions during application. I experienced zero irritation and the results were beautiful. The technicians really know what they're doing and make you feel comfortable throughout the entire process. I've recommended them to all my friends.</p>
        </div>

        <div class="reviewcard7p2k">
            <div class="reviewheader8n3j">
                <img src="https://images.pexels.com/photos/1065084/pexels-photo-1065084.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Emily Patterson" class="reviewerimg4k9m">
                <div>
                    <h4>Emily Patterson</h4>
                    <div class="stars5m8k">★★★★★</div>
                </div>
            </div>
            <p>I got my lashes done here for my wedding and they were absolutely perfect! We did a trial run a month before to make sure everything was exactly how I wanted it. On my wedding day, my lashes looked flawless in every photo and lasted through happy tears during the ceremony. Even after the honeymoon, they still looked great. The attention to detail and customer service at Xivaro Hub is unmatched. Worth every penny!</p>
        </div>

        <div class="reviewcard7p2k">
            <div class="reviewheader8n3j">
                <img src="https://images.pexels.com/photos/1542085/pexels-photo-1542085.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Rachel Thompson" class="reviewerimg4k9m">
                <div>
                    <h4>Rachel Thompson</h4>
                    <div class="stars5m8k">★★★★★</div>
                </div>
            </div>
            <p>I'm an avid swimmer and runner, so I was worried about how lash extensions would hold up with my active lifestyle. The team at Xivaro Hub recommended specific products and techniques designed for athletes. My lashes have held up incredibly well through countless workouts and swim sessions. It's amazing to wake up every morning with beautiful lashes without any effort. This has been a game-changer for my morning routine!</p>
        </div>

        <div class="reviewcard7p2k">
            <div class="reviewheader8n3j">
                <img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=100" alt="Michelle Carter" class="reviewerimg4k9m">
                <div>
                    <h4>Michelle Carter</h4>
                    <div class="stars5m8k">★★★★★</div>
                </div>
            </div>
            <p>At 58 years old, I wasn't sure if lash extensions would look natural on me, but I wanted to try something to enhance my thinning lashes. The consultation at Xivaro Hub put all my concerns to rest. They explained how they would work with my mature lashes and the results have been wonderful. My lashes look naturally fuller and more youthful without looking overdone. I feel more confident and receive compliments regularly. The team treats every client with respect and professionalism regardless of age.</p>
        </div>
    </section>

    <section id="contact9j2m" class="sectionalt4n9p">
        <div class="section2h7k">
            <h2 class="sectiontitle3x8m">Visit Xivaro Hub Today</h2>
            <div class="grid3col5k2j">
                <div class="card9m4l">
                    <h3>Location</h3>
                    <p>2847 Riverside Boulevard</p>
                    <p>Suite 320</p>
                    <p>Meadowbrook, State 45892</p>
                    <p style="margin-top: 1rem;">Our studio is conveniently located in the Riverside Plaza shopping center with ample free parking available. We're easily accessible from Highway 67 and just minutes from downtown Meadowbrook.</p>
                </div>
                <div class="card9m4l">
                    <h3>Contact Information</h3>
                    <p><strong>Phone:</strong> <a href="tel:+15558847392" style="color: #667eea; text-decoration: none; font-weight: bold;">+1 (555) 884-7392</a></p>
                    <p><strong>Email:</strong> info@xivarohub.com</p>
                    <p><strong>Appointments:</strong> bookings@xivarohub.com</p>
                    <p style="margin-top: 1rem;">We respond to all inquiries within 24 hours. For immediate assistance, please call during business hours.</p>
                </div>
                <div class="card9m4l">
                    <h3>Business Hours</h3>
                    <p><strong>Monday - Friday:</strong> 9:00 AM - 7:00 PM</p>
                    <p><strong>Saturday:</strong> 10:00 AM - 6:00 PM</p>
                    <p><strong>Sunday:</strong> 11:00 AM - 5:00 PM</p>
                    <p style="margin-top: 1rem;">We offer flexible scheduling including early morning and evening appointments by request. Same-day appointments may be available for certain services.</p>
                </div>
            </div>
            <div class="highlight3k7m" style="margin-top: 3rem;">
                <h3>Ready to Transform Your Lashes?</h3>
                <p>Booking your appointment is easy! Call us at <a href="tel:+15558847392" style="color: #667eea; font-weight: bold;">+1 (555) 884-7392</a> to speak with our friendly reception team who will help you choose the perfect service and find a convenient appointment time. We recommend booking at least one week in advance for your preferred time slot, especially for weekend appointments. First-time clients should allow extra time for consultation. We look forward to welcoming you to Xivaro Hub!</p>
            </div>
        </div>
    </section>

    <footer class="footer9x4l">
        <div class="footercontent3j8k">
            <div class="footersection7m2p">
                <h3>Xivaro Hub</h3>
                <p>Your trusted destination for professional eyelash extensions and beauty services. We combine artistry with technical expertise to create stunning, natural-looking results.</p>
            </div>
            <div class="footersection7m2p">
                <h3>Quick Links</h3>
                <a href="#services8k3m">Our Services</a>
                <a href="#about7j4n">About Us</a>
                <a href="#history5m9k">Our Story</a>
                <a href="#team8k5m">Meet the Team</a>
                <a href="#reviews3m8k">Client Reviews</a>
                <a href="#contact9j2m">Contact Us</a>
            </div>
            <div class="footersection7m2p">
                <h3>Contact Details</h3>
                <p>2847 Riverside Boulevard, Suite 320</p>
                <p>Meadowbrook, State 45892</p>
                <p>Phone: <a href="tel:+15558847392" style="color: #667eea;">+1 (555) 884-7392</a></p>
                <p>Email: info@xivarohub.com</p>
            </div>
            <div class="footersection7m2p">
                <h3>Legal Information</h3>
                <a href="#" onclick="openModal('privacy'); return false;">Privacy Policy</a>
                <a href="#" onclick="openModal('terms'); return false;">Terms of Service</a>
                <p style="margin-top: 1rem;">© 2024 Xivaro Hub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <div id="privacyModal" class="modal8k3n">
        <div class="modalcontent5j9p">
            <span class="closebtn7k2m" onclick="closeModal('privacy')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last Updated: January 2024</strong></p>
            
            <h3>1. Information Collection</h3>
            <p>Xivaro Hub collects personal information necessary to provide our eyelash extension services. This includes your name, contact information, medical history relevant to lash services, and appointment preferences. We collect this information directly from you during consultation and booking processes. Payment information is processed securely through our payment processor and is not stored on our systems.</p>
            
            <h3>2. Use of Information</h3>
            <p>We use your personal information solely for the purpose of providing and improving our services. This includes scheduling appointments, maintaining your service history, sending appointment reminders, and communicating important information about your lash care. We may also use your information to send promotional offers, but you can opt out of marketing communications at any time.</p>
            
            <h3>3. Information Sharing</h3>
            <p>Xivaro Hub does not sell, trade, or rent your personal information to third parties. We may share information with service providers who assist in our operations, such as appointment scheduling software providers and payment processors. These parties are contractually obligated to maintain the confidentiality of your information and use it only for the purposes we specify.</p>
            
            <h3>4. Data Security</h3>
            <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. This includes secure storage systems, encrypted communications, and restricted access to personal information. However, no method of transmission over the internet is completely secure, and we cannot guarantee absolute security.</p>
            
            <h3>5. Client Records</h3>
            <p>We maintain records of your service history, including photographs of your lash applications for quality control and reference purposes. These records are kept confidential and are only accessible to your assigned technician and management. Photos are never shared publicly without your explicit written consent.</p>
            
            <h3>6. Cookies and Tracking</h3>
            <p>Our website may use cookies to enhance your browsing experience and remember your preferences. These cookies do not collect personally identifiable information. You can disable cookies in your browser settings, though this may affect some website functionality.</p>
            
            <h3>7. Your Rights</h3>
            <p>You have the right to access, correct, or delete your personal information at any time. You may also request a copy of the information we hold about you. To exercise these rights, please contact us using the information provided on our website. We will respond to your request within 30 days.</p>
            
            <h3>8. Children's Privacy</h3>
            <p>Our services are not directed to individuals under the age of 16, and we do not knowingly collect personal information from children. If we become aware that we have collected information from a child without parental consent, we will take steps to delete that information.</p>
            
            <h3>9. Changes to Privacy Policy</h3>
            <p>We reserve the right to modify this privacy policy at any time. Changes will be posted on this page with an updated revision date. We encourage you to review this policy periodically. Continued use of our services after changes constitutes acceptance of the updated policy.</p>
            
            <h3>10. Contact Information</h3>
            <p>If you have questions or concerns about this privacy policy or our data practices, please contact us at info@xivarohub.com or call <a href="tel:+15558847392">+1 (555) 884-7392</a>.</p>
        </div>
    </div>

    <div id="termsModal" class="modal8k3n">
        <div class="modalcontent5j9p">
            <span class="closebtn7k2m" onclick="closeModal('terms')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Last Updated: January 2024</strong></p>
            
            <h3>1. Service Agreement</h3>
            <p>By booking an appointment with Xivaro Hub, you agree to these terms of service. Our eyelash extension services are provided by certified technicians using professional-grade products. We reserve the right to refuse service to anyone for any reason, including but not limited to health concerns that may contraindicate lash extension application.</p>
            
            <h3>2. Appointment Policies</h3>
            <p>Appointments must be booked in advance either by phone or through our online booking system. We require at least 24 hours notice for cancellations or rescheduling. Late cancellations or no-shows may result in a cancellation fee equal to 50% of the service cost. Arriving more than 15 minutes late may result in shortened service time or rescheduling of your appointment.</p>
            
            <h3>3. Client Responsibilities</h3>
            <p>Clients must arrive with clean lashes free of makeup, oils, and mascara. Failure to do so may result in additional cleansing time being deducted from your service time. You must disclose any allergies, sensitivities, or medical conditions that may affect the service. You are responsible for following all aftercare instructions provided by your technician to ensure optimal results and lash health.</p>
            
            <h3>4. Health and Safety</h3>
            <p>Lash extensions are not recommended for individuals with certain eye conditions, active eye infections, or those undergoing chemotherapy. Pregnant or nursing clients should consult with their healthcare provider before receiving services. We maintain strict hygiene protocols and use only sterile, single-use applicators. If you experience any adverse reactions after your service, contact us immediately.</p>
            
            <h3>5. Service Results</h3>
            <p>While we strive for excellence in every application, individual results may vary based on natural lash condition, lifestyle factors, and adherence to aftercare instructions. Lash extensions typically last 3-4 weeks with proper care, though some shedding is natural as your lashes go through their growth cycle. We offer complimentary adjustments within 48 hours of your appointment if you are not satisfied with the results.</p>
            
            <h3>6. Payment Terms</h3>
            <p>Payment is due at the time of service. We accept cash, credit cards, and digital payment methods. Returned checks will incur a processing fee. Gift certificates are non-refundable and must be used within one year of purchase. We do not offer refunds for services rendered, but we will work with you to address any concerns.</p>
            
            <h3>7. Liability Limitations</h3>
            <p>Xivaro Hub and its technicians are not liable for any allergic reactions, infections, or damage resulting from failure to follow aftercare instructions or from pre-existing conditions not disclosed during consultation. Our liability is limited to the cost of the service provided. By receiving our services, you acknowledge and accept these risks.</p>
            
            <h3>8. Photography and Marketing</h3>
            <p>We may request permission to photograph your lashes for our portfolio and marketing materials. You have the right to decline, and your decision will not affect the quality of service you receive. If you consent to photography, you grant Xivaro Hub the right to use these images in promotional materials, social media, and our website.</p>
            
            <h3>9. Intellectual Property</h3>
            <p>All content on the Xivaro Hub website, including text, graphics, logos, and images, is the property of Xivaro Hub and protected by copyright laws. You may not reproduce, distribute, or create derivative works from our content without written permission.</p>
            
            <h3>10. Dispute Resolution</h3>
            <p>Any disputes arising from these terms or our services will be resolved through binding arbitration in accordance with the rules of the American Arbitration Association. You waive your right to participate in class action lawsuits against Xivaro Hub.</p>
            
            <h3>11. Modifications to Terms</h3>
            <p>We reserve the right to modify these terms at any time. Updated terms will be posted on our website with a new effective date. Continued use of our services after changes constitutes acceptance of the modified terms.</p>
            
            <h3>12. Contact for Questions</h3>
            <p>If you have questions about these terms of service, please contact us at info@xivarohub.com or call <a href="tel:+15558847392">+1 (555) 884-7392</a> during business hours.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'block';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'block';
            }
        }

        function closeModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'none';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'none';
            }
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal8k3n')) {
                event.target.style.display = 'none';
            }
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">

</body>
</html>




