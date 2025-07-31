import React from "react";
import "./App.css";

const API_BASE = "https://aisite.world/api";

function App() {
  const [msg, setMsg] = React.useState("");

  React.useEffect(() => {
    fetch(`${API_BASE}/ping.php?token=sad`)
      .then((res) => res.text())
      .then((txt) => setMsg("🔌 API: " + txt))
      .catch((err) => setMsg("❌ Błąd połączenia z API: " + err.message));
  }, []);

  return (
    <div className="App">
      <h1>AISITE</h1>
      <p>{msg}</p>
    </div>
  );
}

export default App;

