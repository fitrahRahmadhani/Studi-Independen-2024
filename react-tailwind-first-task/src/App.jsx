import { useState, useEffect } from "react";
import AppLayout from "./pages/AppLayout";

function App() {
  const [title, setTitle] = useState("Ini adalah judul pertama");
  const [changeTitle, setChangeTitle] = useState(false);

  useEffect(
    function () {
      if (changeTitle) {
        setTitle("Ini adalah judul kedua");
      }
    },
    [changeTitle]
  );

  function handleChangeTitle() {
    setChangeTitle(true);
  }
  return <AppLayout title={title} handleChangeTitle={handleChangeTitle} />;
}

export default App;
