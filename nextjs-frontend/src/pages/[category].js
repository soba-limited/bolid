import { useRouter } from "next/router";

const Post = () => {
  const router = useRouter();
  const { category } = router.query
  return (
    <p>Post: {category}</p>
  );
}

export default Post;