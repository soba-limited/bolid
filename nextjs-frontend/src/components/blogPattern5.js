import styles from '@/styles/components/blogPattern5.module.scss'
import { BlogColumn3 } from '@/components'

const BlogPattern5 = () => {
  return (
    <div className={styles.flex}>
      <BlogColumn3 />
      <BlogColumn3 />
    </div>
  );
}

export default BlogPattern5;