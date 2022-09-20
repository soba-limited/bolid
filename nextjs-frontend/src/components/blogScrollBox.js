import styles from '@/styles/components/blogScrollBox.module.scss'
import Image from 'next/image';
import Link from 'next/link';
import { BlogTxt } from '@/components'
import { dummyImage } from '@/lib/constants'

const BlogScrollBox = () => {
  const dummyImageOdd = dummyImage.filter(e => e.num % 2 === 1)
  const dummyImageEven = dummyImage.filter(e => e.num % 2 === 0)

  return (
    <div className={styles.scrollBox}>
      <div className={`${styles.scrollEven} ${styles.scrollCont}`}>
        {dummyImageEven.map((items, index) => (
          <Link href="/" key={index}>
            <a className={styles.blogLink}>
              <div className={styles.imgBox}>
                <Image
                  src={items.src}
                  alt=""
                  layout="responsive"
                  sizes="(min-width: 1340px) 312px, (min-width: 768px) 150px, 100vw"
                  priority
                />
              </div>
              <BlogTxt
                smallMb
                cat="FASHION"
                cat2="TREND & STORY"
                ttl="フェンディ 2022年秋冬クチュールコレクション"
                name="ARATA HOMMA"
                time="2022年7月20日"
              />
            </a>
          </Link>
        ))}
      </div>
      <div className={`${styles.scrollOdd} ${styles.scrollCont}`}>
        {dummyImageOdd.map((items, index) => (
          <Link href="/" key={index}>
            <a className={styles.blogLink}>
              <div className={styles.imgBox}>
                <Image
                  src={items.src}
                  alt=""
                  layout="responsive"
                  sizes="(min-width: 1340px) 312px, (min-width: 768px) 150px, 100vw"
                  priority
                />
              </div>
              <BlogTxt
                smallMb
                cat="FASHION"
                cat2="TREND & STORY"
                ttl="フェンディ 2022年秋冬クチュールコレクション"
                name="ARATA HOMMA"
                time="2022年7月20日"
              />
            </a>
          </Link>
        ))}
      </div>
    </div>
  );
}

export default BlogScrollBox;