import PropTypes from "prop-types";
function Button({ handleChangeTitle }) {
  return (
    <button
      onClick={handleChangeTitle}
      className="w-full px-4 py-2 bg-red-500 rounded-md font-semibold text-slate-100"
    >
      Ganti Judul
    </button>
  );
}
Button.propTypes = {
  handleChangeTitle: PropTypes.func.isRequired,
};
export default Button;
