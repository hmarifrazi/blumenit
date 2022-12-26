import React from "react";
import { createRoot } from "react-dom/client";
import Home from "./Component/Home";
import { Routes, Route, Link } from "react-router-dom";

export default function App() {
    return (
        <>
            <Home />
        </>
    );
}

if (document.getElementById("root")) {
    createRoot(document.getElementById("root")).render(<App />);
}
