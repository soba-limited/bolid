import styles from '@/styles/components/blogPattern1.module.scss'
import { BlogColumn3, BlogPickup, BlogScrollBox } from '@/components';

const BlogPattern1 = ({column3None, pattern}) => {
  return (
    <>
      <article className={`${styles.stickyArea} ${column3None ? styles.mbNone : ''}`}>
        <BlogPickup patternData={pattern} />
        <BlogScrollBox patternData={pattern} />
      </article>

      {column3None ? '' : <BlogColumn3 patternData={pattern} />}
    </>
  );
}

export default BlogPattern1;