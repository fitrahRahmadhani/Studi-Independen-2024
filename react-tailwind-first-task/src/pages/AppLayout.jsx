import PropTypes from "prop-types";
import Title from "../components/Title";
import Body from "../components/Body";
import Button from "../components/Button";

function AppLayout({ title, handleChangeTitle }) {
  return (
    <div className="w-screen h-screen bg-slate-900 flex justify-center items-center">
      <div className="w-[500px] h-fit p-4 border-2 border-slate-500 rounded-lg text-center flex flex-col gap-4">
        <Title title={title} />
        <Body />
        <Button handleChangeTitle={handleChangeTitle} />
      </div>
    </div>
  );
}

AppLayout.propTypes = {
  title: PropTypes.string.isRequired,
  handleChangeTitle: PropTypes.func.isRequired,
};
export default AppLayout;
